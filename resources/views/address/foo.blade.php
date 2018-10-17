
<select name="scity" class="city-select scity">
    <option value="1"> 1شهر</option>
    <option value="2"> 2شهر</option>
</select>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>


    $(document).on("change", ".scity", function () {
        var city_id = $(this).val();

        $.ajax({
            type: 'GET',
            url: "{{ route('address.getmahales') }}",
            data: {city_id: city_id}
        })
            .done(function (data) {
                //console.debug(data);

            });
    });

</script>