<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tools = [
            ['name' => 'React', 'category' => json_encode(['Web Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://reactjs.org/docs/getting-started.html'],
            ['name' => 'Vue.js', 'category' => json_encode(['Web Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://vuejs.org/guide/'],
            ['name' => 'Angular', 'category' => json_encode(['Web Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://angular.io/docs'],
            ['name' => 'Next.js', 'category' => json_encode(['Web Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://nextjs.org/docs'],
            ['name' => 'Nuxt.js', 'category' => json_encode(['Web Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://nuxtjs.org/docs/get-started/installation'],
            ['name' => 'Svelte', 'category' => json_encode(['Web Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://svelte.dev/docs'],
            ['name' => 'Laravel', 'category' => json_encode(['Web Development']), 'language' => 'PHP', 'documentation_url' => 'https://laravel.com/docs/'],
            ['name' => 'Symfony', 'category' => json_encode(['Web Development']), 'language' => 'PHP', 'documentation_url' => 'https://symfony.com/doc/current/index.html'],
            ['name' => 'Django', 'category' => json_encode(['Web Development']), 'language' => 'Python', 'documentation_url' => 'https://docs.djangoproject.com/en/stable/'],
            ['name' => 'Flask', 'category' => json_encode(['Web Development']), 'language' => 'Python', 'documentation_url' => 'https://flask.palletsprojects.com/en/latest/'],
            ['name' => 'Flutter', 'category' => json_encode(['Mobile Development']), 'language' => 'Dart', 'documentation_url' => 'https://flutter.dev/docs'],
            ['name' => 'React Native', 'category' => json_encode(['Mobile Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://reactnative.dev/docs/getting-started'],
            ['name' => 'Ionic', 'category' => json_encode(['Mobile Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://ionicframework.com/docs'],
            ['name' => 'Xamarin', 'category' => json_encode(['Mobile Development']), 'language' => 'C#', 'documentation_url' => 'https://docs.microsoft.com/en-us/xamarin/'],
            ['name' => 'SwiftUI', 'category' => json_encode(['Mobile Development']), 'language' => 'Swift', 'documentation_url' => 'https://developer.apple.com/documentation/swiftui/'],
            ['name' => 'Android SDK', 'category' => json_encode(['Mobile Development']), 'language' => 'Java/Kotlin', 'documentation_url' => 'https://developer.android.com/studio'],
            ['name' => 'Electron.js', 'category' => json_encode(['Desktop Development']), 'language' => 'JavaScript/TypeScript', 'documentation_url' => 'https://www.electronjs.org/docs/latest/'],
            ['name' => 'Qt', 'category' => json_encode(['Desktop Development']), 'language' => 'C++', 'documentation_url' => 'https://doc.qt.io/'],
            ['name' => 'GTK', 'category' => json_encode(['Desktop Development']), 'language' => 'C', 'documentation_url' => 'https://www.gtk.org/docs/'],
            ['name' => 'WPF', 'category' => json_encode(['Desktop Development']), 'language' => 'C#', 'documentation_url' => 'https://docs.microsoft.com/en-us/dotnet/desktop/wpf/?view=netdesktop-6.0'],
            ['name' => 'Avalonia', 'category' => json_encode(['Desktop Development']), 'language' => 'C#', 'documentation_url' => 'https://avaloniaui.net/docs'],
            ['name' => 'Xcode', 'category' => json_encode(['Apple Ecosystem']), 'language' => 'Swift/Objective-C', 'documentation_url' => 'https://developer.apple.com/xcode/resources/'],
            ['name' => 'CocoaPods', 'category' => json_encode(['Apple Ecosystem']), 'language' => 'Package Manager', 'documentation_url' => 'https://guides.cocoapods.org/'],
            // Add more tools here as needed to reach 100
        ];

        // Insert the tools into the database
        DB::table('tools')->insert($tools);
    }
}
