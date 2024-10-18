<x-app-layout>

    <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Курс кўшиш</button>
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
                                    <a href="#" class="datatable-sorter">Курс номи</a>
                                </th>
                                <th data-sortable="true" aria-sort="descending" class="datatable-descending" style="width: 14.832869080779945%;">
                                    <a href="#">Курс нарҳи</a>
                                </th>
                                <th data-sortable="true" style="width: 15.70473537604457%;">
                                    <a href="#">Ўқувчи сони</a>
                                </th>
                                <th>Харакат</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr data-index="0">
                                <td>{{$course->id}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{number_format($course->price, 0, "", " ")}} сўм</td>
                                <td>150</td>
                                <td>
                                    <a class="btn btn-warning">Таҳрирлаш</a>
                                    <a class="btn btn-danger">Ўчириш</a>
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

    @include('courses.create', ["branches" => $branches])


</x-app-layout>