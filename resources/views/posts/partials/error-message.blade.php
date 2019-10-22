<div class="alert alert-danger">
    @if($errors->has($fieldTitle))
    @foreach ($errors->get($fieldTitle) as $error)
        
            <li>

                {{ $error }}

            </li> 

    @endforeach


</div>

@endif