let student = {
    "name": "ali",
    "age": 20
}

console.log(student.name)


let aptechstudents = {
    "student123456":{
        "name":"ahmed","age" : 25
    },

    "student2345": {
        "name":"daniyal",
        "age" : 28
    }
}

console.log(aptechstudents.student123456.name, aptechstudents.student123456.age)
console.log(aptechstudents.student2345.name)

// JS -< JSON (Transport)
 let aptechstudentsJSON = JSON.stringify(aptechstudents)
 console.log(aptechstudentsJSON)
 console.log( typeof aptechstudentsJSON)