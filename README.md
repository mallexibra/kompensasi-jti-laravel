# API SPESIFICATIONS
API ini menyediakan berbagai endpoint untuk menghubungkan mobile apps ke database.

## BASE URL
```
http://localhost:8000/api
```

## RESOURCES
### 1. Authentication
#### a. Login Users
- **Endpoint** : `/users/`
- **Method**: `POST`
- **Description**: Login users pada platform
- **Request:**
```json
{
    username: number,
    password: string
}
```
- **Response**:
```json
{
    status: 200,
    message: "Login users successfully",
    role: "mahasiswa",
    data: {
        token: "token",
        users: {
            name: "Maulana Malik Ibrahim",
            username: "mallexibra",
            telp: "082342374",
            alamat: "Banyuwangi",
            image: "http://localhost:8000/imageprofile.jpg",
        }
    }
}
```

#### b. Forgot Password
- **Endpoint:** `/send-email-verification`
- **Method:** `POST`
- **Description:** Lupa password mengirimkan kode ke email
- **Request:**
```json
{
    email: string
}
```
- **Response**:
```json
{
    status: 200,
    message: "Check your email for code verification"
}
```

#### c. Email Verification
- **Endpoint:** `/forgot-password`
- **Method:** `POST`
- **Description:** Verifikasi kode dari email
- **Request:**
```json
{
    verification_code: number
}
```
- **Response:**
```json
{
    status: 200,
    message: "Email Verification Successfully"
}
```

#### d. Reset Password
- **Endpoint:** `/reset-password`
- **Method:** `POST`
- **Description:** Reset password pengguna setelah berhasil mengirimkan kode
- **Request:**
```json
{
    new_password: string
}
```
- **Response:**
```json
{
    status: 200,
    message: "Reset password successfully"
}
```

#### e. Logout User
- **Endpoint:** `/logout`
- **Method:** `GET`
- **Description:** Logout user dari aplikasi
- **Response:**
```json
{
    status: 200,
    messagge: "Logout user successfully"
}
```

### 2. Dashboard
#### a. Get Data Dashboard
- **Endpoint:**: `/student-dashboard`
- **Method:** `GET`
- **Description:** Menampilkan data untuk dashboard mahasiswa
- **Response:**
```json
{
    status: 200,
    message: "Get data student dashboard successfully",
    data: {
        number_of_tasks: 10,
        number_of_requests: 2,
        number_of_rejected_requests: 3,
        number_of_finished_requests: 4,
        number_of_proccess_requests: 1
    }
}
```

### 3. Activities
#### a. Get Data Requests Unfinished
- **Endpoint:** `/requests-unfinished`
- **Method:** `GET`
- **Description:** Menampilkan data request yang belum selesai
- **Response**:
```json
{
    status: 200,
    message: "Get data requests unfinished",
    data: {
        number_of_unfinished_requests: 10,
        unfinished_requests: [
            {
                id: 1,
                task_title: "Tugas 1",
                task_description: "Tugas 1 silahkan dikerjakan",
                acc_dosen: "terima",
                acc_kaprodi: null
            }
        ]
    }
}
```

### 4. History
#### a. Get Data Requests Finished
- **Endpoint:** `/requests-finished`
- **Method:** `GET`
- **Description:** Menampilkan data request yang telah selesai
- **Response:**
```json
{
    status: 200,
    message: "Get data requests finished",
    data: {
        number_of_finished_requests: 10,
        finished_requests: [
            {
                id: 1,
                task_title: "Tugas 1",
                task_description: "Tugas 1 silahkan dikerjakan",
                acc_dosen: "terima",
                acc_kaprodi: "terima",
                file: "http://localhost:8000/api/requests-finished/1?download=true"
            }
        ]
    }
}
```

### 5. Notifications
#### a. Get Data Notifications
- **Endpoint:** `/notifications`
- **Method:** `POST`
- **Description:** Menampilkan data notifications dari status yang diperbarui
- **Response:**
```json
{
    status: 200,
    message: "Get data notifications successfully",
    data: [
        {
            id: 1,
            title: "Tugas mu sudah dikumpulkan",
            time: "17-10-2024 09:00"
        }
    ]
}
```
