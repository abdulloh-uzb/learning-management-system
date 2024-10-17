<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Филиал қўшиш</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('branches.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <input type="text" placeholder="Филиал номи" class="form-control" name="name">
                    </div>

                    <div class="input-group mb-2">
                        <input type="text" placeholder="Манзили" class="form-control" name="address">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Сақлаш</button>
                </div>
            </form>
        </div>
    </div>
</div>