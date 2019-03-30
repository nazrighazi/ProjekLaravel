<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
@csrf
Title : <br><input type="text" name="title" placeholder="Add Title Here"><br><br>
Content : <br><textarea name="content" id="" cols="30" rows="10" placeholder="Add Content Here"></textarea><br><br>
<input type="file" name="image" id=""><br><br><br><br>
<button type="submit">Submit</button>


</form>