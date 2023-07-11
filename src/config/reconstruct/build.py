from unidecode import unidecode

base = open(r'C:\Users\Long To\Downloads\truong.txt', 'r', encoding='utf-8')
new = open(r'C:\Users\Long To\Downloads\diemchuyen.txt', 'r', encoding='utf-8')

base_lst = base.readlines()
new_lst = new.readlines()

final = []
unexist = []

# Check schools existence in current year
for bases in base_lst:
    for news in new_lst:
        i = bases.split(',')
        j = news.split(',')
        if unidecode(i[1].replace('"','').lower()) == unidecode(j[1].lower()):
            # DIEM CHUAN
            # nv1 = f'2023,{i[0]},{i[1]},NV1,{j[2]}'.replace('\n','').replace('"', '')
            # nv2 = f'2023,{i[0]},{i[1]},NV2,{j[3]}'.replace('\n','').replace('"', '')
            # nv3 = f'2023,{i[0]},{i[1]},NV3,{j[4]}'.replace('\n','').replace('"', '')
            # final.append([nv1,nv2,nv3])

            # TI LE CHOI
            # nv1 = f'2023,{i[0]},{i[1]},NV1,{j[3]},{j[2]}'.replace('\n','').replace('"', '')
            # final.append(nv1)

            # DIEM CHUYEN (no `break`)
            nv1 = f'2023,{i[0]},{i[1]},NV1_{j[2]},{j[3]}'.replace('\n','').replace('"', '')
            nv2 = f'2023,{i[0]},{i[1]},NV2_{j[2]},{j[4]}'.replace('\n','').replace('"', '')
            final.append([nv1,nv2])


        if news == new_lst[len(new_lst)-1]:
            # print(i)
            unexist.append(i)

print('\n\n')

for i in final:
    print('\n'.join(i))
