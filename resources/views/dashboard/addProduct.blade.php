@extends('dashboard.partials.mainLayout')

@section('container')
<div class="px-4 container-lg">
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Product name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Product name">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" id="photo" name="thumbnail">
        </div>
        <div class="mb-3" id="file-input-container">
            <label for="thumbnail" class="form-label">Photo</label>
            <input class="form-control" type="file" id="thumbnail" name="photo[]">
        </div>
        <p id="add-file" class="mt-1 btn btn-primary">add photo</p>
    </form>
</div>

<script>
    document.getElementById('add-file').addEventListener('click', function () {
        // Create a wrapper div to group file input and remove button
        const fileWrapper = document.createElement('div');
        fileWrapper.style.marginBottom = '10px';
        fileWrapper.style.marginTop = '10px';

        // Create a new input element
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.classList.add('form-control');
        fileInput.name = 'files[]';

        // Create a remove button
        const removeButton = document.createElement('button');
        removeButton.type = 'button'; // Prevent form submission
        removeButton.textContent = 'Remove';
        removeButton.classList.add('btn', 'btn-ghost-danger');

        // Add event listener to remove the file input
        removeButton.addEventListener('click', function () {
            fileWrapper.remove(); // Remove the wrapper (input + button)
        });

        // Append the input and remove button to the wrapper
        fileWrapper.appendChild(fileInput);
        fileWrapper.appendChild(removeButton);

        // Append the wrapper to the container
        const container = document.getElementById('file-input-container');
        container.appendChild(fileWrapper);
    });
</script>
@endsection
