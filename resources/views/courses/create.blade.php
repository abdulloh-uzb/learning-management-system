<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Курс кўшиш</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('courses.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <select class="form-select mb-2" name="branch_id">
                        <option selected>Филиал танланг</option>
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach
                    </select>
                    <div class="input-group mb-2">
                        <input type="text" placeholder="Курс номи" class="form-control" name="name">

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="price" placeholder="0" class="form-control">
                                <span class="input-group-text" id="basic-addon2">сўм</span>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="number" name="duration" placeholder="Курс давомийлиги" class="form-control ml-2">
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Сақлаш</button>
                </div>
            </form>
        </div>
    </div>
</div>