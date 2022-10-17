# one day service 2 for practice again and again

#database

#relationships
1. Clinic has many Procedures
2. Room has many beds

#relationship
booking -> patient_id
booking -> room_id
booking -> bed_id
booking -> clinic_id
booking -> procedure_id          
booking -> user_id

#reservation
patient_id
HN
Full name
Tell
room_id
bed_id
วันที่เริ่มต้น bookings datetime_start (YYYY-MM-DD)
วันที่สิ้นสุด bookings datetime_stop (YYYY-MM-DD)
วันประจำสัปดาห์ (bookings_week_day)
clinic_id
procedure_id

# MVC
#Model-database mapper
#View - UI => template(html+css) + data(Model)
#Controller -flow

## CSRF token ใช้กับการ post request
