

$(document).ready(function () {
    /**
     * Find student by NIA, get JSON data and process.
     * @return {nil}   no return
     */
    $('#content form #nia').focusout(function () {
        $.getJSON( "/student/"+$(this).val()+".json", function (data) {
            if(data.error)
                alert(data.message);
            else{
                $('#nombre').val(data.student.nombre);
                $('#apellidop').val(data.student.apellidop);
                $('#apellidom').val(data.student.apellidom);
                $('#curp').val(data.student.curp);
                if(data.student.sexo == "h"){
                    $('#sexo.sh').attr('checked', true);}
                if(data.student.sexo == "m"){
                    $('#sexo.sm').attr('checked', true);}
                $('#nacimiento').val(data.student.nacimiento);
                $('#entidadnacimiento').val(data.student.entidadnacimiento);
                $('#tiposangre').val(data.student.tiposangre);
                $('#domicilio').val(data.student.domicilio);
                $('#cp').val(data.student.cp);
                $('#colonia').val(data.student.colonia);
                $('#municipio').val(data.student.municipio);
                $('#localidad').val(data.student.localidad);
                $('#estado').val(data.student.estado);
                $('#tel').val(data.student.tel);
                $('#cel').val(data.student.cel);
                $('#email').val(data.student.email);
                $('#student_id').val(data.student.id);
            }
        });
    });

    /**
     * Load Groups from selected semester
     * @return {nil}   no return
     */
    $('#content form #semester_id').change(function() {
        $('#content form #group_id').empty();

        $.getJSON( "/group/"+$(this).val()+".json", function (data) {
            if (data.error)
                alert(data.message);
            else {
                $.each(data.semester.groups, function (i, item) {
                    $('#content form #group_id').append('<option value="'+item.id+'">'+item.nombre+'</option>');
                });
            }
        });
    });

    /**
     * Find tutor by name, get JSON data and process.
     * @return {nil}   no return
     */
    $('#content form #nombre.tutortxt').focusout(function () {
        $.getJSON( "/tutor/"+$(this).val()+".json", function (data) {
            if(data.error)
                alert(data.message);
            else{
                $('#nombre').val(data.tutor.nombre);
                //mas campos
                $('#tutor_id').val(data.tutor.id);
            }
        });
    });

    /**
     * Hide/Show documents options
     * @return {nil}   no return
     */
    $('#content form #tipo.documento').change(function() {
        //hide options

        //show options by switch
    });
});