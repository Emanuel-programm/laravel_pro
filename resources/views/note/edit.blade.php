<x-layout>

    <div class="note-container single-note">
    <h1>Edit your Note</h1>
    <form action="{{route('note.update',$note)}}" method="post" class="note">
    @csrf
    @method('PUT')
    <textarea name="note" id="" class="note-body" cols="30" rows="10" placeholder="Enter your note here">
    {{$note->note}}
    </textarea>
    <div class="note-buttons">
    <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
    <button class="note-submit-button">Submit</button>
    </div>


    </form>
    </div>
    
    
    </x-layout>
    