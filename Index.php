<html>
<tittle>
i = (input("nhập tuổi của mày vô:"))
if i == "":
  print("mày để trống tao tính kiểu gì?")
a = i.isnumeric()
if a == True:
  i = int(i)
  if i <= 0:
    print("con lậy bố, bố chưa đc sinh.")
  elif i > 116:
    print("mày bị ảo đá à")
  else:
    print("tuổi bạn là",i)
else:
  print("mày ghi chữ tao tính kiểu con mẹ gì")
