<form class="flex flex-col mt-6 gap-6">
    <div class="flex flex-col gap-1">
        <label class="text-sm" for="title">Title</label>
        <input type="text" placeholder="Post title..." id="title" class="border p-3 rounded-xl"/>
    </div>

    <div class="flex flex-col gap-1">
        <label class="text-sm" for="categories">Categories</label>
        <select name="categories" multiple class="border rounded-xl">
            <option value="test" class="p-3">TEST</option>
            <option value="test" class="p-3">TEST 2</option>
            <option value="test" class="p-3">TEST 2</option>
            <option value="test" class="p-3">TEST 2</option>
            <option value="test" class="p-3">TEST 2</option>
        </select>
    </div>


    <div class="flex flex-col gap-1">
        <label class="text-sm" for="content">Content</label>
        <textarea id="content" placeholder="Content..." class="border p-3 rounded-xl min-h-[150px]"></textarea>
    </div>

    <div>
        <button class="bg-primary text-white py-2 px-4 rounded-xl" type="submit">Save post</button>
    </div>
</form>
