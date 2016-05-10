@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            <li>{!! $errors->first('txtCV') !!}</li>
        </ul>
    </div>
@endif