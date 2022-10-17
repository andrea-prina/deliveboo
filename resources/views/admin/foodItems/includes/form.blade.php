
<div class="form-outline mb-4">
    <label class="form-label" for="name">Name <span class="star">*</span></label>
    <input type="text" required max='255'id="name" class="form-control" name="name" required value="{{ old('name') }}"/>
</div>


<div class="form-outline mb-4">
    <label class="form-label" for="description">Description <span class="star">*</span></label>
    <input type="text" required id="description" class="form-control" name="description" required value="{{ old('description') }}" />
</div>

<div class="form-outline mb-4">
    <label class="form-label" for="price">Price <span class="star">*</span></label>
    <input type="number" step="0.01" min="0.01" required id="price" class="form-control"
        name="price" min="0" max="99.99"required value="{{ old('price') }}" />
</div>

<div class="form-outline mb-4">
    <label class="form-label" for="image_path">Image *</label>
    <input class="form-control" type="file" id="image_path" name="image_path">

</div>


<input type='hidden' value='0' name='availability'>
<div class="form-check form-switch">
    <label for="availability">Availability</label>
    <input class="form-check-input" type="checkbox" id="availability" value="1" name="availability"
     {{ $food->availability == '1' ? 'checked' : '' }}>
</div>

<button type="submit" class="btn btn-accent btn-block mb-4">Send</button>
