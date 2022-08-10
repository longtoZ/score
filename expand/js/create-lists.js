    // fetch("../json/years.json")
    //     .then(response => response.json())
    //     .then(data => {
    //         for (let i of data.years) {
    //             yearsList.push(i)
    //         }
    
    //         for (let i of data.districts) {
    //             districtsList.push(i)
    //         }
    
    //         for (let i of data.wishs) {
    //             wishsList.push(i)
    //         }
    //     });

const yearsList = [2022,2021,2020,2019,2018,2017,2016,2015];
var districtsList = ["Quận 1", "Quận 3", "Quận 4", "Quận 5", "Quận 6", "Quận 7", "Quận 8", "Thủ Đức", "Quận 10", "Quận 11", "Quận 12", "Bình Thạnh", "Gò Vấp", "Phú Nhuận", "Tân Bình", "Tân Phú", "Bình Tân", "Bình Chánh", "Cần Giờ", "Củ Chi", "Hóc Môn", "Nhà Bè"];
// const wishsList = ["Nguyện vọng 1", "Nguyện vọng 2", "Nguyện vọng 3"]
const schoolTypesObj = {
    "Trường thường" : "L03", 
    "Trường có lớp chuyên, tích hợp" : "L02", 
    "Trường chuyên" : "L01"
}

const schoolTypesObjRev = {
    "L03" : "Trường thường",
    "L02" : "Trường có lớp chuyên, tích hợp",
    "L01" : "Trường chuyên"
}

const normalSubjectsObj = {
    "Nguyện vọng 1": "NV1",
    "Nguyện vọng 2": "NV2",
    "Nguyện vọng 3": "NV3"
}

const proSubjectsObj = {
    "Nguyện vọng Chuyên Anh" : "NV1_CANH",
    "Nguyện vọng Chuyên Địa" : "NV1_CDIA",
    "Nguyện vọng Chuyên Hoá" : "NV1_CHOA",
    "Nguyện vọng Chuyên Lý" : "NV1_CLY",
    "Nguyện vọng Chuyên Nhật" : "NV1_CNHA",
    "Nguyện vọng Chuyên Pháp" : "NV1_CPHA",
    "Nguyện vọng Chuyên Sinh" : "NV1_CSI",
    "Nguyện vọng Chuyên Sử" : "NV1_CSU",
    "Nguyện vọng Chuyên Tin" : "NV1_CTIN",
    "Nguyện vọng Chuyên Toán" : "NV1_CTO",
    "Nguyện vọng Chuyên Trung" : "NV1_CTRU",
    "Nguyện vọng Chuyên Văn" : "NV1_CVAN"
}