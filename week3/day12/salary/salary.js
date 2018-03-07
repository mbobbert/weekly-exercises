function monthly_salary (pay_per_hour, number_of_days_week, working_days_month) {
    var pay_per_hour = 20; //you don't actually have to define these, if you don't you're more flexible //
    var number_of_days_week = 5;
    var working_days_month = 20;
        return pay_per_hour * number_of_days_week * working_days_month;
}

function monthly_salary (pay_per_hour, number_of_days_week, working_days_month) {
        var result = pay_per_hour * number_of_days_week * working_days_month;
        return result;

function taxed_salary (monthly_salary, tax) {
        return monthly_salary * (1 - tax);
}


function taxed_salary (monthly_salary, tax) {
        var result = monthly_salary * (1 - tax);
        return result;
}

