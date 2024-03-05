<form action="/filePHP" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Form Upload File PHP</h1>
    <p>Tên file: <input type="file" name="photo">
        <button type="submit">Upload file</button>
    </p>
    <p><b>Ghi chú:</b> Chỉ cho phép định dạng .jpg .jpeg .gif và kích thước tối đa tệp tin là 5MB</p>
</form>