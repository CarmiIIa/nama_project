@extends('layout')

@section('content')
<div class="container content">  
  <form id="create-form">
    <h3>Create Todo</h3>
    
    <fieldset>
        <label for="">Title</label>
        <input placeholder="title of todo" type="text">
    </fieldset>
    <fieldset>
        <label for="">Target Date</label>
        <input placeholder="Target Date" type="date">
    </fieldset>
    <fieldset>
        <label for="">Description</label>
        <textarea placeholder="Type your descriptions here..." tabindex="5"></textarea>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit" id="contactus-submit">Submit</button>
    </fieldset>
    <fieldset>
        <a href="/todo/" class="btn-cancel btn-lg btn">Cancel</a>
    </fieldset>
  
  </form>
</div>
@endsection