$(document).ready(function(){
    var data = [];
    var trypast = []; 
    var treatment = [];

    $('.goals').click(function(){
        step = 2;
        goal = $(this).attr('data');
        data.push('maingoal',goal);
        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });

    $('#combobox').change(function(){
        step = 3;
        state = $('#combobox option:selected').val();
        var reqdata = {
            state: state,
        }
        $.ajax({
            url: $('meta[name="base-url"]').attr('content'),
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: "post",
            data: reqdata,
            dataType: "json",
            success: function(response){
                console.log(response);
                if(response == "true"){
                    $('.msgexstate').show();
                    $('.sucss').hide();
                }else{
                    $('.msgexstate').hide();
                    $('.sucss').show();
                    data.push('state',state);
                    var jsonString = JSON.stringify(data);
                    var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
                    encryptedString = encrypted.toString();

                    localStorage.setItem('7o1l',encryptedString);
                }
            }
        });
    });

    $('.dob').click(function(){
        step = 4;
        var months = '';
        var days = '';
        var years = '';
        $('#month').change(function(){
            var month = $('#month option:selected').text();
            months = month;
            data.push('month',month);
    
            var jsonString = JSON.stringify(data);
            var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
            encryptedString = encrypted.toString();
            
            localStorage.setItem('7o1l',encryptedString);
        });
    
        $('#day').change(function(){
            var day = $('#day option:selected').val();
            days = day;
            data.push('day',day);
    
            var jsonString = JSON.stringify(data);
            var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
            encryptedString = encrypted.toString();
    
            localStorage.setItem('7o1l',encryptedString);
        });
    
        $('#year').change(function(){
            var year = $('#year option:selected').text();
            years = year;
            data.push('year',year);
    
            var jsonString = JSON.stringify(data);
            var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
            encryptedString = encrypted.toString();
    
            localStorage.setItem('7o1l',encryptedString);
        });
    });
    
    $('.gender').click(function(){
        var gender = $(this).attr('data');
        data.push('gender',gender);

        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });
    

    $('.next').click(function(){
        var medication = [];
        $('.medication').change(function(){
            var medi = $(this).val();
    
            if(this.checked){
                medication.push(medi);
            }else{
                medication = $.grep(medication, function(value) {
                    return value != medi;
                });
            }
        });
        data.push('medication',medication);
    
        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });

    $('.bmi').click(function(){
        h_feet = $('#h-feet').val();
        h_inch = $('#h-inch').val();
        w_lbs = $('#w-lbs').val();

        data.push(h_feet,'h_feet');
        data.push(h_inch,'h_inch');
        data.push(w_lbs,'w_lbs');

        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });

    $('.diet').click(function(){
        diet = $(this).attr('data');
        data.push('diet',diet);

        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });

    $('.tried').change(function(){
        var past = $(this).val();
        if(this.checked){
            trypast.push(past);
        }else{
            trypast = $.grep(trypast, function(value) {
                return value != past;
            });
        } 
        data.push('triedinpast',trypast);

        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });

    $('.trylose').click(function(){
       var loseweight = $(this).attr('data');
       data.push('trylosewght',loseweight);

       var jsonString = JSON.stringify(data);
       var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
       var encryptedString = encrypted.toString();

       localStorage.setItem('7o1l',encryptedString);
    });

    $('.treatment').change(function(){
        var treat = $(this).val();
        if(this.checked){
            treatment.push(treat);
        }else{
            treatment = $.grep(treatment, function(value){
                return value != treat;
            });
        }
        data.push('treatment',treatment);

        var jsonString = JSON.stringify(data);
        var encrypted = CryptoJS.AES.encrypt(jsonString, 'secret');
        var encryptedString = encrypted.toString();

        localStorage.setItem('7o1l',encryptedString);
    });

    $('.mainrsn').click(function(){
        $('.input-append').hide();
        console.log($(this).attr('data'));
    });
    
    $('.append-input').click(function(){
        $('.input-append').show();
    })
});
