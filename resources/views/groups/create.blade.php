<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Гуруҳ кўшиш</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('groups.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <select class="form-select" name="branch_id">
                            <option selected>Филиал танланг</option>
                            @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <select class="form-select" name="branch_id">
                            <option selected>Курс танланг</option>
                            @foreach($courses as $course)
                            <option value="{{$branch->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" placeholder="Гуруҳ номи" class="form-control" name="name">
                    </div>
                    <div class="input-group mb-2">
                        <select class="form-select" name="teacher_id">
                            <option selected>Ўқитувчи танланг</option>
                            @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->full_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label class="form-label">Бошланиш санаси</label>
                                <input type="date" name="start_date" placeholder="Бошланиш санаси" class="form-control" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label class="form-label">Тугаш санаси</label>
                                <input type="date" name="end_date" placeholder="Тугаш санаси" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-2">
                                <input type="time" name="start_time" placeholder="Бошланиш вақти" class="form-control" min="08:00:00" max="20:00:00">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-2">
                                <input type="time" name="end_time" placeholder="Тугаш вақти" class="form-control" min="08:00:00" max="20:00:00">
                            </div>
                        </div>
                    </div>

                    <label>Дарс кунлари</label>
                    <select name="schedule_type" class="form-select">
                        <option value="1">Тоқ кунлар</option>
                        <option value="1">Жуфт кунлар</option>
                        <option value="1">Ҳар кун</option>

                    </select>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="button">Сақлаш</button>
                </div>
            </form>
        </div>
    </div>
</div>

