<x-app-layout>

    @if (session('message') == "success")
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Filial muvaffaqiyatli yaratildi!    
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Xatolik! Filial yaratilmadi.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif


    <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Филиал қўшиш</button>
    <div class="card mb-4">

        <div class="card-body">
            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <!-- <div class="datatable-top">
                    <div class="datatable-search">
                        <input class="datatable-input" placeholder="Қидириш" type="search" title="Search within table" aria-controls="datatablesSimple">
                    </div>
                </div> -->
                <div class="datatable-container">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th data-sortable="true" style="width: 7%;"><a href="#"  >ID</a></th>
                                <th data-sortable="true" style="width: 30.362116991643457%;"><a href="#"  >Номи</a></th>
                                <th data-sortable="true" aria-sort="descending" class="datatable-descending" style="width: 14.832869080779945%;"><a href="#"  >Статус</a></th>
                                <th data-sortable="true" style="width: 15.70473537604457%;"><a href="#"  >Ўқувчилар сони</a></th>
                                <th data-sortable="true" style="width: 15.70473537604457%;"><a href="#"  >Ходимлар сони</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($branches as $branch)
                            <tr data-index="{{$loop->index}}">
                                <td>{{$branch->id}}</td>
                                <td>{{$branch->name}}</td>
                                <td>Ishlayapti</td>
                                <td>300</td>
                                <td>50</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              
            </div>
        </div>
    </div>

    @include("branches.create")

</x-app-layout>