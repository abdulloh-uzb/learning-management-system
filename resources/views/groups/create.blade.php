<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Гуруҳ кўшиш</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('groups.store')}}" method="POST" id="form">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <select class="form-select" name="branch_id"  id="branchSelector">
                            <option selected>Филиал танланг</option>
                            @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <select class="form-select" name="course_id" disabled id="course_id">
                            <option selected>Курс танланг</option>
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" placeholder="Гуруҳ номи" class="form-control" name="name" id="name">
                    </div>
                    <div class="input-group mb-2">
                        <select class="form-select" name="teacher_id" id="teacher_id">
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
                                <input type="date" name="start_date" placeholder="Бошланиш санаси" class="form-control" id="start_date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label class="form-label">Тугаш санаси</label>
                                <input type="date" name="end_date" placeholder="Тугаш санаси" class="form-control" id="end_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-2">
                                <input type="time" name="start_time" placeholder="Бошланиш вақти" class="form-control" min="08:00:00" max="20:00:00" id="start_time">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-2">
                                <input type="time" name="end_time" placeholder="Тугаш вақти" class="form-control" min="08:00:00" max="20:00:00" id="end_time">
                            </div>
                        </div>
                    </div>

                    <label class="mt-2">Дарс кунлари</label>
                    <select name="schedule_type" class="form-select" id="schedule_type">
                        <option value="1">Тоқ кунлар</option>
                        <option value="2">Жуфт кунлар</option>
                        <option value="3">Ҳар кун</option>

                    </select>

                    <label class="mt-2">Ўқувчилар сони</label>
                    <input type="number" name="students_count" id="students_count" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="button">Сақлаш</button>
                </div>
            </form>
        </div>
    </div>
</div>

<x-slot:script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#branchSelector').on('change', function(event) {
            event.preventDefault(); 
    
            // delete old options
            $('.course_option').remove();
            
            // send request
            $.ajax({
                url: "get-courses/" + this.value,
                method: "GET",
                dataType: "json",
                success: function(data){
                    $.each(data, function(index, value){    
                        $("#course_id").append(`<option value='${value.id}' class='course_option'> ${value.name}</option>`);
                        $("#course_id").prop("disabled", false);                    
                    });
                },
                error: function(data){
                    console.log("ishlamadi");                    
                }
            });
            
        });

        $('#form').on('submit', function(){
            event.preventDefault();
            data = {
                name: $("#name").val(),
                course_id: $("#course_id").val(),
                teacher_id: $("#teacher_id").val(),
                start_time: $("#start_time").val(),
                end_time: $("#end_time").val(),
                start_date: $("#start_date").val(),
                finish_date: $("#end_date").val(),
                schedule_type: $("#schedule_type").val(),
                students_count: $("#students_count").val(),
                _token: "{{ csrf_token() }}"
            }
            console.log(data);
            
            $.ajax({
                url: "{{ route('groups.store') }}",
                method: "POST",
                data: data,
                dataType: "json",
                success: function(data){
                    $('#exampleModal').modal('hide'); // Hide the modal
                    $('#form').trigger("reset");
                },
                error: function(data){
                    console.log("ishlamadi");
                    console.log(data);
                    
                }
            });
        });
    });
</script>
</x-slot>