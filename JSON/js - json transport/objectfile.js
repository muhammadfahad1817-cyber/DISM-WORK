let aptechstudentsJSON =`{
    "student123456":{
        "name":"ahmed","age" : 25
    },

    "student1234567":{
        "name":"daniyal",
        "age" : 28  }
}`

 let aptechstudents = JSON.parse(aptechstudentsJSON)
 console.log(aptechstudents.student123456.name, aptechstudents.student123456.age)
 console.log(aptechstudents.student1234567.name, aptechstudents.student1234567.age)
 