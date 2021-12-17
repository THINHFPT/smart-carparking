@extends('user.layout')
@section('user')
<div class="container" >
    <div class = "background-frame">
        <div class = "background-search-map">
            <div class ="background-search"><p id="one">Chọn nơi bạn muốn đến:</p>
                <form method="GET" id="search" name="find-place"action="/filename.php">
                    <select>
                        <option value=""disabled selected>Quận/Huyện</option>
                        <option value="Quận Cầu giấy">Quận Cầu giấy</option>
                    </select>
                    <select id="ward" >
                        <option value="Phường Nghĩa tân" disabled selected>Xã/Phường</option>
                        <option value="Phường Nghĩa tân" >Phường Nghĩa tân</option>
                        <option value="Phường Nghĩa đô" >Phường Nghĩa đô</option>
                        <option value="Mễ Trì" >Mễ Trì</option>
                    </select>
                    <p>Chọn địa chỉ nhà xe bên dưới:</p>
                    <div class="homeparking" id="guideline">
                    </div>
                </form>
            </div>
            <div class="background-map" id="google.map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.571298548937!2d-95.49436768481768!3d29.732174981997012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c2591cc6ff97%3A0x12c7af0edf90940b!2sJohnny%20Dang%20%26%20Co.!5e0!3m2!1svi!2s!4v1639232968264!5m2!1svi!2s" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

    <script type="text/javascript" >
        function fetch_customer_data(query=''){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('user.action')}}",
                type: "GET",
                data : {query: query},
                dataType : 'json',
                success: function (response){
                    $('.homeparking').html("")
                    $.each(response.homes, function (key,item) {
                        $('.homeparking').append('<a  href="bookCart/'+item.id+'" >'+
                            '<div class="homeAddress">'+
                               

                                '<span  > Địa chỉ :'+item.address+'</span>' +'<br>'+
                                '<span> giá tiền : '+ item.price +'</span>' +'<br>'+
                                '<span> giờ mở của : '+ item.start_time +'</span>'+'<br>'+
                                '<span> giờ đóng của : '+ item.end_time +'</span>'

                            +'</div>'
                            +'</a>'
                        );
                    })
                }
            })
        }
        $(document).on('click', '#ward', function (){
            var query = $("#ward option:selected").val();
            fetch_customer_data(query)
        });



    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd19ScYAzGHJGCtZo2ogugaTBZKP45Yx0&libraries=places&callback=initMap&libraries=places"
            async defer></script>
@endsection


