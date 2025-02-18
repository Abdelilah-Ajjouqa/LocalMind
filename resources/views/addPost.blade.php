<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <form action="" class="flex flex-col max-w-lg mx-auto mt-10 p-6 bg-white shadow-md rounded-lg" method="POST">
        <h2 class="text-2xl font-bold mb-4 text-center">Add New Post</h2>
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Title">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700">Content</label>
            <input type="text" name="content" id="content" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Content">
        </div>
        <div class="mb-4">
            <label for="country" class="block text-gray-700">Country</label>
            <select name="country" id="country" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="usa">USA</option>
                <option value="canada">Canada</option>
                <option value="uk">UK</option>
                <!-- Add more countries as needed -->
            </select>
        </div>
        <div class="mb-4">
            <label for="city" class="block text-gray-700">City</label>
            <input type="text" name="city" id="city" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="City">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">Add Post</button>
    </form>
</body>
</html>
