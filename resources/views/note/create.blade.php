<x-app-layout>

<div class="note-container single-note">
<h1>create new note</h1>
<form action="{{route('note.store')}}" method="post" class="note">
@csrf
<textarea name="note" id="" class="note-body" cols="30" rows="10" placeholder="Enter your note here">

</textarea>
<div class="note-buttons">
<a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
<button class="note-submit-button">submit</button>
</div>
</form>
</div>


</x-app-layout>
