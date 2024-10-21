<x-app-layout>
    <x-slot:title>
        Guruhlar
    </x-slot>
    <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Гуруҳ кўшиш</button>
    <div class="card mb-4">

        <div class="card-body">
            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                <div class="datatable-container">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th data-sortable="true" style="width: 7%;">
                                    <a href="#">ID</a>
                                </th>
                                <th data-sortable="true" style="width: 30.362116991643457%;">
                                    <a href="#">Гуруҳ номи
                                    </a>
                                </th>
                                <th data-sortable="true" aria-sort="descending" class="datatable-descending" style="width: 14.832869080779945%;">
                                    <a href="#">Курс номи</a>
                                </th>
                                <th data-sortable="true" style="width: 15.70473537604457%;">
                                    <a href="#"> Ўқувчи сони</a>
                                </th>
                                <th>Харакат</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groups as $group)
                            <tr data-index="0">
                                <td>{{$group->id}}</td>
                                <td>{{$group->name}}</td>
                                <td>{{$group->course_id}}</td>
                                <td>{{$group->students_count}}</td>
                                <td>
                                    <a class="btn btn-warning" href="groups">Таҳрирлаш</a>
                                    <form action="{{route('groups.destroy', $group->id)}}" method="POST" class="d-inline-block">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Ўчириш</button>
                                    </form>
                                    <a class="btn btn-primary">Нусҳа олиш</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @include('groups.create', 
    [
        "branches" => $branches
    ])


</x-app-layout>


