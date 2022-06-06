from openpyxl import *

def truong(cityID, city, schoolCol, disCol, type):
    wb = load_workbook(r'C:\xampp\htdocs\search_project\config\reconstruct\ts2015-2021.xlsx')
    ws = wb.active
    data_lst = []

    for i in range(2, ws.max_row+1):
        id = cityID.upper() + str(ws[f'A{i}'].value)
        name = ws[f'{schoolCol}{i}'].value
        district = ws[f'{disCol}{i}'].value
        data_lst.append([id, name, city, district, type])
    
    print(data_lst)
    
    wb2 = Workbook()
    ws2 = wb2.active
    ws2.title = "data"

    for i in data_lst:
        ws2.append(i)
    
    wb2.save(r'C:\xampp\htdocs\search_project\expand\reconstruct\truong.xlsx')

def diemChuan(year, scoreIDCol, cityID, sheet):
    wb = load_workbook(r'C:\xampp\htdocs\search_project\config\reconstruct\ts2015-2021.xlsx')
    ws = wb[sheet]
    lst = []
    scoreData = [f'{scoreIDCol[i]}1' for i in range(len(scoreIDCol))]

    print(scoreData)

    for i in range(2, ws.max_row+1):
        lst.append([cityID + str(ws[f'A{i}'].value), [ws[f'{scores}{i}'].value for scores in scoreIDCol]])

    wb.close()

    wb2 = Workbook()
    ws2 = wb2.active
    ws2.title = "data"

    for i in lst:
        for j in range(len(scoreData)):
            ws2.append([year, i[0], ws[scoreData[j]].value, i[1][j]])

    wb2.save(r'C:\xampp\htdocs\search_project\config\reconstruct\diem_chuan.xlsx')

def chiTieu(year, scoreIDCol, cityID, targetCol, amountCol):
    wb = load_workbook(r'C:\xampp\htdocs\search_project\config\reconstruct\tlc-2021.xlsx')
    ws = wb.active
    data_lst = []

    for i in range(2, ws.max_row+1):
        id = cityID + str(ws[f'A{i}'].value)
        scoreID = ws[f'{scoreIDCol}{i}'].value
        target = ws[f'{targetCol}{i}'].value
        amount = ws[f'{amountCol}{i}'].value

        data_lst.append([year, id, scoreID, target, amount])
    
    wb2 = Workbook()
    ws2 = wb2.active
    ws2.title = "data"

    for i in data_lst:
        ws2.append(i)
    
    wb2.save(r'C:\xampp\htdocs\search_project\config\reconstruct\chi_tieu.xlsx')


# truong('HCM_', 'TP Ho Chi Minh', 'B', 'C', 'THUONG')
# diemChuan('2021', ['D', 'E', 'F'], 'HCM_', 'ts10-2021')
# chiTieu('2021', 'C', 'HCM_', 'D', 'E')

