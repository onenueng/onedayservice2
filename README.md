# one day service 2 for practice again and again

#database

#relationships
1. Clinic has many Procedures
2. Room has many beds

#relationship
booking -> patient_id //1 booking มีได้ 1 patient, 1 patient มีได้หลาย booking
booking -> room_id //1 booking มีได้ 1 room, 1 room มีได้หลาย booking
booking -> bed_id //1 booking มีได้ 1 bed, 1 bed มีได้หลาย booking
booking -> clinic_id  //1 booking มีได้ 1 clinic, 1 clinic มีได้หลาย booking
booking -> procedure_id //1 booking มีได้ 1 procedure, 1 procedure มีได้หลาย booking         
booking -> user_id //1 booking มีได้ 1 user, 1 user มีได้หลาย booking

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
