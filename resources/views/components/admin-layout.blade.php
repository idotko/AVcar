<!-- resources/views/components/admin-layout.blade.php -->
<x-admin-nav /> <!-- Include the admin navigation bar -->

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Admin Header (optional) -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header ?? '' }}
        </div>
    </header>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>
</div>
