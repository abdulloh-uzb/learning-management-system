<x-app-layout>
    <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Курс кўшиш</button>
    <div class="card mb-4">

        <div class="card-body">
            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top">
                    <div class="datatable-dropdown">
                        <label>
                            <select class="datatable-selector">
                                <option value="5">5</option>
                                <option value="10" selected="">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            </select> entries per page
                        </label>
                    </div>
                    <div class="datatable-search">
                        <input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="datatablesSimple">
                    </div>
                </div>
                <div class="datatable-container">
                    <table class="datatable-table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th data-sortable="true" style="width: 7%;"><a href="#" class="datatable-sorter">ID</a></th>
                                <th data-sortable="true" style="width: 30.362116991643457%;"><a href="#" class="datatable-sorter">Курс номи</a></th>
                                <th data-sortable="true" aria-sort="descending" class="datatable-descending" style="width: 14.832869080779945%;"><a href="#" class="datatable-sorter">Курс нарҳи</a></th>
                                <th data-sortable="true" style="width: 15.70473537604457%;"><a href="#" class="datatable-sorter">Ўқувчи сони</a></th>
                                <th>Харакат</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-index="0">
                                <td>1</td>
                                <td>Matematika. Boshlangich</td>
                                <td>600 000</td>
                                <td>150</td>
                                <td>
                                    <a class="btn btn-warning">Таҳрирлаш</a>
                                    <a class="btn btn-danger">Ўчириш</a>
                                    <a class="btn btn-primary">Нусҳа олиш</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="datatable-bottom">
                    <div class="datatable-info">Showing 1 to 10 of 57 entries</div>
                    <nav class="datatable-pagination">
                        <ul class="datatable-pagination-list">
                            <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><a data-page="1" class="datatable-pagination-list-item-link">‹</a></li>
                            <li class="datatable-pagination-list-item datatable-active"><a data-page="1" class="datatable-pagination-list-item-link">1</a></li>
                            <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">2</a></li>
                            <li class="datatable-pagination-list-item"><a data-page="3" class="datatable-pagination-list-item-link">3</a></li>
                            <li class="datatable-pagination-list-item"><a data-page="4" class="datatable-pagination-list-item-link">4</a></li>
                            <li class="datatable-pagination-list-item"><a data-page="5" class="datatable-pagination-list-item-link">5</a></li>
                            <li class="datatable-pagination-list-item"><a data-page="6" class="datatable-pagination-list-item-link">6</a></li>
                            <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">›</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('courses.create')
</x-app-layout>