<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">

    @include('admin.navbar')
        <div>
            <form>
                <div>
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Write a title" required>
                </div>
                <div>
                    <label>Price</label>
                    <input type="num" name="price" placeholder="price" required>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label>Description</label>
                    <input type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>

    @include('admin.adminscript')
  </body>
</html>