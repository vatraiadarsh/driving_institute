php artisan make:controller TrainersAttendenceController -r -m TrainerAttendence
php artisan make:controller StudentsAttendenceController -r -m StudentAttendence
php artisan make:controller TrainersPaymentController -r -m TrainerPayment
php artisan make:controller StudentsPaymentController -r -m StudentPayment




php artisan make:migration create_trainers_attendence_table --create

php artisan make:migration create_students_attendence_table --create

php artisan make:migration create_trainers_payment_table --create

php artisan make:migration create_students_payment_table --create



