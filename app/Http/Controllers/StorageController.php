<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function test()
    {

        Storage::disk('public')->put('example.txt', 'Content');
        Storage::disk('public')->append('example.txt', 'Append Content');
        Storage::disk('public')->prepend('example.txt', 'Prepend Content');

        $getFiles = Storage::disk('public')->files();
        $filteredFiles = array_filter($getFiles, function ($file) {
            return $file !== '.gitignore';
        });

        $getSize = Storage::disk('public')->size('example.txt');
        $getLastMofify = Storage::disk('public')->lastModified('example.txt');
        $getMemeType = Storage::disk('public')->mimeType('example.txt');
        $getFilePath = Storage::disk('public')->path('example.txt');
        $getFileContent = Storage::disk('public')->get('example.txt');

        return [$getLastMofify, $getSize, $getMemeType, $getFilePath, $getFileContent, $getFileContent];
        /*return $getFileContent;*/
    }
}
