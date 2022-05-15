<div>
    // show $message
    <p>{{ $message }}</p>
    <form action='/sandbox' method='post'>
        {{ csrf_field() }}
        <input type='text' name='message' value='{{ $message }}'>
        {{-- <input type='text' name='message' value=''> --}}
        <input type='submit' value='submit'>
    </form>
</div>