const sidebar = document.querySelector('.sidebar');
const sidebarToggleButton = document.querySelector('.sidebar-toggle-button');
const main = document.querySelector('main');
const sidebarTitles = document.querySelectorAll('.sidebar h3');
const sidebarList = document.querySelector('.sidebar-list');

sidebarToggleButton.addEventListener('click', function () {
    sidebar.classList.toggle('active');

    if (sidebar.classList.contains('active')) {
        // handle main element
        main.classList.remove('ps-[50px]');
        main.classList.add('ps-[200px]');

        // handle sidebar list
        sidebarList.classList.remove('items-center');
        sidebarList.classList.add('ps-[0.5rem]');

        // handle sidebar toggle button icon
        sidebarToggleButton.querySelector('.sidebar-close-icon').classList.remove('hidden');
        sidebarToggleButton.querySelector('.sidebar-bars-icon').classList.add('hidden');

        // handle sidebar titles
        sidebarTitles.forEach(item => {
            item.classList.remove('hidden');
        });

        // handle sidebar
        sidebar.classList.remove('w-[50px]');
        sidebar.classList.add('w-[200px]');
    } else {
        // handle main element
        main.classList.remove('ps-[200px]');
        main.classList.add('ps-[50px]');

        // handle sidebar list
        sidebarList.classList.remove('ps-[0.5rem]');
        sidebarList.classList.add('items-center');

        // handle sidebar toggle button icon
        sidebarToggleButton.querySelector('.sidebar-bars-icon').classList.remove('hidden');
        sidebarToggleButton.querySelector('.sidebar-close-icon').classList.add('hidden');

        // handle sidebar titles
        sidebarTitles.forEach(item => {
            item.classList.add('hidden');
        });

        // handle sidebar
        sidebar.classList.remove('w-[200px]');
        sidebar.classList.add('w-[50px]');
    }
});

