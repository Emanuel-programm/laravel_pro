<x-layout>
<div class="note-container">
    <a class="new-note-btn" href="{{route('note.create')}}">New note</a>

    <div class="notes">
        <div class="note">
            @foreach ($notes as $note )
            <div class="note-body">{{Str::words($note->note, 30) }}
                </div>
                <div class="note-buttons">
                    <a  class="note-edit-btn" href="{{route('note.show',$note)}}">View</a>
                    <a  class="note-edit-btn" href="{{route('note.edit',$note)}}">Edit</a>
                    <form action="{{route('note.destroy',$note)}}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <button class="note-edit-delete">Delete</button>
                    </form>
                   
                </div>
            </div> 
            @endforeach
            
    </div>
    {{$notes->links()}}
</div>
</x-layout>
