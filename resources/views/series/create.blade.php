<x-layout title="New Series">
    <form action="{{route('series.store')}}" method="post">
        @csrf
       <div class="mb-3">
            <label for="name" class="form-label">name:</label>
            <input type="text" id="name" name="name" class="form-control">
       </div>
       <button type="submit" class="btn btn-primary">Add</button>
    </form>

</x-layout>