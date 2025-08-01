document.addEventListener("DOMContentLoaded", () => {
    const statusList = ["todo", "in-progress", "done"];
    const workspaceId = document.querySelector("#workspace-id").value;

    // get all list element in one array
    const allLists = statusList.map((name) =>
        document.querySelector(`#${name}-tasks-list`),
    );

    // get csrf token
    const csrf = document.querySelector('meta[name="csrf-token"]').content;

    if (allLists) {
        allLists.forEach((list, index) => {
            new Sortable(list, {
                animation: 150,
                group: "tasks",
                onAdd: function (evt) {
                    const taskId = evt.item.dataset.id;
                    const newStatus = statusList[index];

                    // get true url, match with all type environemnt like production and local
                    const updateUrl = document.querySelector(
                        'meta[name="update-status-url"]',
                    ).content;

                    const url = updateUrl
                        .replace("__WORKSPACE__", workspaceId)
                        .replace("__TASK__", taskId);

                    fetch(url, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": csrf,
                        },
                        body: JSON.stringify({
                            status:
                                newStatus === "in-progress"
                                    ? "in_progress"
                                    : newStatus,
                        }),
                    })
                        .then((response) => {
                            if (response.status === 403) {
                                console.error(
                                    "CSRF token mismatch or permission denied",
                                );
                                location.reload(); // Refresh to get new CSRF token
                                return;
                            }
                            if (!response.ok)
                                throw new Error(
                                    `HTTP error! status: ${response.status}`,
                                );
                            return response.json();
                        })
                        .then((data) => {
                            console.log(data.message);
                        })
                        .catch((error) =>
                            console.error("Error updating task:", error),
                        );
                },
            });
        });
    }
});
