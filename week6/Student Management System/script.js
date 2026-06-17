document.addEventListener("DOMContentLoaded", loadStudents);

document.getElementById("studentForm")
.addEventListener("submit", function(e) {

    e.preventDefault();

    let id = document.getElementById("student_id").value;
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let course = document.getElementById("course").value;

    let file = id ? "update_student.php" : "add_student.php";

    fetch(file, {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body:
            "id=" + id +
            "&name=" + name +
            "&email=" + email +
            "&course=" + course
    })
    .then(res => res.text())
    .then(() => {
        document.getElementById("studentForm").reset();
        document.getElementById("student_id").value = "";
        loadStudents();
    });
});

function loadStudents() {
    fetch("fetch_students.php")
    .then(res => res.json())
    .then(data => {

        let output = "";

        data.forEach(student => {
            output += `
            <tr>
                <td>${student.id}</td>
                <td>${student.name}</td>
                <td>${student.email}</td>
                <td>${student.course}</td>
                <td>
                    <button class="edit-btn"
                    onclick="editStudent(
                    '${student.id}',
                    '${student.name}',
                    '${student.email}',
                    '${student.course}')">
                    Edit
                    </button>

                    <button class="delete-btn"
                    onclick="deleteStudent(${student.id})">
                    Delete
                    </button>
                </td>
            </tr>`;
        });

        document.getElementById("studentTable").innerHTML = output;
    });
}

function editStudent(id, name, email, course) {
    document.getElementById("student_id").value = id;
    document.getElementById("name").value = name;
    document.getElementById("email").value = email;
    document.getElementById("course").value = course;
}

function deleteStudent(id) {

    if(confirm("Delete this student?")) {

        fetch("delete_student.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "id=" + id
        })
        .then(res => res.text())
        .then(() => loadStudents());
    }
}