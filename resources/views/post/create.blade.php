<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data"> 
    @csrf
    Title:
    <input type="text" name="title">
    <br>
    Content:
    <textarea name="context" id="" cols="30" row="10"></textarea>
    <br>
    Image:
    <input type="file" name="image">
    <button type="submit"> SAVE </button>
</form>