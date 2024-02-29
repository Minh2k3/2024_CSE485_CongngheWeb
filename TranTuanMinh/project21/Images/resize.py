from PIL import Image

file = "noname.png"

# Mở ảnh
img = Image.open(file)  # Đường dẫn tới ảnh của bạn

# Kiểm tra nếu ảnh là RGBA thì chuyển sang RGB
if img.mode == 'RGBA':
    img = img.convert('RGB')

# Resize ảnh (thêm bước này nếu bạn muốn resize)
new_img = img.resize((1920, 1080))

# Lưu ảnh mới dưới dạng JPEG
new_img.save(file)
