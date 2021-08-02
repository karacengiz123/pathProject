<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_TW', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => '該表單中不可有額外字段。',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上傳文件太大， 請重新嘗試上傳一個較小的文件。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 驗證符無效， 請重新提交。',
    'This value is not a valid HTML5 color.' => '該數值不是個有效的 HTML5 顏色。',
    'Please enter a valid birthdate.' => '請輸入有效的生日日期。',
    'The selected choice is invalid.' => '所選的選項無效。',
    'The collection is invalid.' => '集合無效。',
    'Please select a valid color.' => '請選擇有效的顏色。',
    'Please select a valid country.' => '請選擇有效的國家。',
    'Please select a valid currency.' => '請選擇有效的貨幣。',
    'Please choose a valid date interval.' => '請選擇有效的日期間隔。',
    'Please enter a valid date and time.' => '請輸入有效的日期與時間。',
    'Please enter a valid date.' => '請輸入有效的日期。',
    'Please select a valid file.' => '請選擇有效的文件。',
    'The hidden field is invalid.' => '隱藏字段無效。',
    'Please enter an integer.' => '請輸入整數。',
    'Please select a valid language.' => '請選擇有效的語言。',
    'Please select a valid locale.' => '請選擇有效的語言環境。',
    'Please enter a valid money amount.' => '請輸入正確的金額。',
    'Please enter a number.' => '請輸入數字。',
    'The password is invalid.' => '密碼無效。',
    'Please enter a percentage value.' => '請輸入百分比值。',
    'The values do not match.' => '數值不匹配。',
    'Please enter a valid time.' => '請輸入有效的時間。',
    'Please select a valid timezone.' => '請選擇有效的時區。',
    'Please enter a valid URL.' => '請輸入有效的網址。',
    'Please enter a valid search term.' => '請輸入有效的搜索詞。',
    'Please provide a valid phone number.' => '請提供有效的手機號碼。',
    'The checkbox has an invalid value.' => '無效的選框值。',
    'Please enter a valid email address.' => '請輸入有效的電子郵件地址。',
    'Please select a valid option.' => '請選擇有效的選項。',
    'Please select a valid range.' => '請選擇有效的範圍。',
    'Please enter a valid week.' => '請輸入有效的星期。',
    'This value should be false.' => '該變數的值應為 false 。',
    'This value should be true.' => '該變數的值應為 true 。',
    'This value should be of type {{ type }}.' => '該變數的類型應為 {{ type }} 。',
    'This value should be blank.' => '該變數應為空。',
    'The value you selected is not a valid choice.' => '選定變數的值不是有效的選項。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要選擇 {{ limit }} 個選項。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能選擇 {{ limit }} 個選項。',
    'One or more of the given values is invalid.' => '一個或者多個給定的值無效。',
    'This field was not expected.' => '此字段是沒有預料到。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '該值不是一個有效的日期（date）。',
    'This value is not a valid datetime.' => '該值不是一個有效的日期時間（datetime）。',
    'This value is not a valid email address.' => '該值不是一個有效的郵件地址。',
    'The file could not be found.' => '找不到檔案。',
    'The file is not readable.' => '無法讀取檔案。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大 ({{ size }} {{ suffix }})。檔案大小不可以超過 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '無效的檔案類型 ({{ type }}) 。允許的檔案類型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '這個變數的值應該小於或等於 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字串太長，長度不可超過 {{ limit }} 個字元。',
    'This value should be {{ limit }} or more.' => '該變數的值應該大於或等於 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字串太短，長度不可少於 {{ limit }} 個字元。',
    'This value should not be blank.' => '該變數不應為空白。',
    'This value should not be null.' => '該值不應為 null 。',
    'This value should be null.' => '該值應為 null 。',
    'This value is not valid.' => '無效的數值 。',
    'This value is not a valid time.' => '該值不是一個有效的時間。',
    'This value is not a valid URL.' => '該值不是一個有效的 URL 。',
    'The two values should be equal.' => '這兩個變數的值應該相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大，檔案大小不可以超過 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '檔案太大。',
    'The file could not be uploaded.' => '無法上傳此檔案。',
    'This value should be a valid number.' => '該值應該為有效的數字。',
    'This value is not a valid country.' => '該值不是有效的國家名。',
    'This file is not a valid image.' => '該檔案不是有效的圖片。',
    'This is not a valid IP address.' => '該值不是有效的IP地址。',
    'This value is not a valid language.' => '該值不是有效的語言名。',
    'This value is not a valid locale.' => '該值不是有效的區域值（locale）。',
    'This value is already used.' => '該值已經被使用。',
    'The size of the image could not be detected.' => '不能解析圖片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '圖片太寬 ({{ width }}px)，最大寬度為 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '圖片寬度不夠 ({{ width }}px)，最小寬度為 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '圖片太高 ({{ height }}px)，最大高度為 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '圖片高度不夠 ({{ height }}px)，最小高度為 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '該變數的值應為用戶目前的密碼。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '該變數應為 {{ limit }} 個字元。',
    'The file was only partially uploaded.' => '該檔案的上傳不完整。',
    'No file was uploaded.' => '沒有上傳任何檔案。',
    'No temporary folder was configured in php.ini.' => 'php.ini 裡沒有配置臨時目錄。',
    'Cannot write temporary file to disk.' => '暫存檔寫入磁碟失敗。',
    'A PHP extension caused the upload to fail.' => '某個 PHP 擴展造成上傳失敗。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '該集合最少應包含 {{ limit }} 個元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '該集合最多包含 {{ limit }} 個元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '該集合應包含 {{ limit }} 個元素 element 。',
    'Invalid card number.' => '無效的信用卡號。',
    'Unsupported card type or invalid card number.' => '不支援的信用卡類型或無效的信用卡號。',
    'This is not a valid International Bank Account Number (IBAN).' => '該值不是有效的國際銀行帳號（IBAN）。',
    'This value is not a valid ISBN-10.' => '該值不是有效的10位國際標準書號（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '該值不是有效的13位國際標準書號（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '該值不是有效的國際標準書號（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '該值不是有效的國際標準期刊號（ISSN）。',
    'This value is not a valid currency.' => '該值不是有效的貨幣名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '該值應等於 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '該值應大於 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '該值應大於或等於 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '該值應小於 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '該值應小於或等於 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '該值應不等於 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值不應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '圖像格式過大 ({{ ratio }})。 最大允許尺寸 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '圖像格式過小 ({{ ratio }})。最小尺寸 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '方形圖像 ({{ width }}x{{ height }}px)。不接受方形圖像。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '紀念冊布局圖像 ({{ width }}x{{ height }}px)。 不接受紀念冊布局圖像。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '書籍布局圖像 ({{ width }}x{{ height }}px)。不接受圖像書籍布局。',
    'An empty file is not allowed.' => '不接受空白文件。',
    'The host could not be resolved.' => '未找到服務器。',
    'This value does not match the expected {{ charset }} charset.' => '該數值不符合預期 {{ charset }} 符號編碼。',
    'This is not a valid Business Identifier Code (BIC).' => '無效企業識別碼 (BIC)。',
    'Error.' => '錯誤。',
    'This is not a valid UUID.' => '無效的通用唯壹標識符 (UUID)。',
    'This value should be a multiple of {{ compared_value }}.' => '該值必須是倍數 {{ compared_value }}。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '該企業識別碼 (BIC) 與銀行賬戶國際編號不壹致 (IBAN) {{ iban }}。',
    'This value should be valid JSON.' => '該數值必須序列化為JSON格式。',
    'This collection should contain only unique elements.' => '該集合應僅包含唯壹元素。',
    'This value should be positive.' => '數值應為正數。',
    'This value should be either positive or zero.' => '數值應是正數，或為零。',
    'This value should be negative.' => '數值應為負數。',
    'This value should be either negative or zero.' => '數值應是負數，或為零。',
    'This value is not a valid timezone.' => '無效時區。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => '此密碼已被泄露，切勿使用。請更換密碼。',
    'This value should be between {{ min }} and {{ max }}.' => '該數值應在 {{ min }} 和 {{ max }} 之間。',
    'This value is not a valid hostname.' => '該數值不是有效的主機名稱。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '該集合內的元素數量得是 {{ compared_value }} 的倍數。',
    'This value should satisfy at least one of the following constraints:' => '該數值需符合以下其中一個約束：',
    'Each element of this collection should satisfy its own set of constraints.' => '該集合內的每個元素需符合元素本身規定的約束。',
    'This value is not a valid International Securities Identification Number (ISIN).' => '該數值不是有效的國際證券識別碼 （ISIN）。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份驗證發生異常。',
    'Authentication credentials could not be found.' => '沒有找到身份驗證的憑證。',
    'Authentication request could not be processed due to a system problem.' => '由於系統故障，身份驗證的請求無法被處理。',
    'Invalid credentials.' => '無效的憑證。',
    'Cookie has already been used by someone else.' => 'Cookie 已經被其他人使用。',
    'Not privileged to request the resource.' => '沒有權限請求此資源。',
    'Invalid CSRF token.' => '無效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '沒有找到支持此 token 的身份驗證服務提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。回話超時或沒有啓用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用戶名。',
    'Account has expired.' => '賬號已逾期。',
    'Credentials have expired.' => '憑證已逾期。',
    'Account is disabled.' => '賬號已被禁用。',
    'Account is locked.' => '賬號已被鎖定。',
    'Too many failed login attempts, please try again later.' => '登入失敗的次數過多，請稍後再試。',
    'Invalid or expired login link.' => '失效或過期的登入鏈接。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$catalogueTr = new MessageCatalogue('tr', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Grubu Güncelle',
    'group.show.name' => 'Grup Adı',
    'group.new.submit' => 'Grup Yarat',
    'group.flash.updated' => 'Grup Güncellendi.',
    'group.flash.created' => 'Grup Yaratıldı.',
    'group.flash.deleted' => 'Grup Silindi.',
    'security.login.username' => 'Kullanıcı adı',
    'security.login.password' => 'Parola',
    'security.login.remember_me' => 'Beni hatırla',
    'security.login.submit' => 'Giriş',
    'profile.show.username' => 'Kullanıcı adı',
    'profile.show.email' => 'E-posta adresi',
    'profile.edit.submit' => 'Güncelle',
    'profile.flash.updated' => 'Profil Güncellendi.',
    'change_password.submit' => 'Parolayı Değiştir',
    'change_password.flash.success' => 'Parola değiştirildi.',
    'registration.check_email' => 'E-posta adresinize hesabınızı aktive etmek için kullanacağınız aktivasyon linkini barındıran bir e-posta gönderildi.',
    'registration.confirmed' => 'Tebrikler %username%. Hesabınız şu anda aktifleştirildi.',
    'registration.back' => 'Asıl sayfaya geri dön.',
    'registration.submit' => 'Kayıt ol',
    'registration.flash.user_created' => 'Kullanıcı başarıyla yaratıldı.',
    'registration.email.subject' => 'Hoşgeldin %username%!',
    'registration.email.message' => 'Hoşgeldiniz %username%!

Hesabınızın aktivasyonunu tamamlamak için lütfen  %confirmationUrl%
adresini ziyaret ediniz.

Teşekkürler,
Web Takımı.
',
    'resetting.check_email' => 'E-posta adresinize parolanızı sıfırlama adresi bulunan bir e-posta gönderildi.
Not: Yeni şifre talep etmek için %tokenLifetime% saat beklemelisiniz.

E-posta gelmedi ise spam klasörünü kontrol edin veya tekrar deneyin.
',
    'resetting.request.username' => 'Kullanıcı adı ya da e-posta adresi',
    'resetting.request.submit' => 'Parolayı sıfırla',
    'resetting.reset.submit' => 'Parolayı değiştir',
    'resetting.flash.success' => 'Parola başarıyla değiştirildi.',
    'resetting.email.subject' => 'Parola Yenileme',
    'resetting.email.message' => 'Merhaba  %username%!

Parolanızı yenilemek için  %confirmationUrl%
adresini ziyaret ediniz.

Teşekkürler,
Web Takımı.
',
    'layout.logout' => 'Çıkış',
    'layout.login' => 'Giriş',
    'layout.register' => 'Kayıt ol',
    'layout.logged_in_as' => '%username% olarak giriş yapıldı',
    'form.group_name' => 'Grup adı',
    'form.username' => 'Kullanıcı adı',
    'form.email' => 'E-posta adresi',
    'form.current_password' => 'Geçerli parola',
    'form.password' => 'Parola',
    'form.password_confirmation' => 'Parola tekrar',
    'form.new_password' => 'Yeni parola',
    'form.new_password_confirmation' => 'Yeni parola tekrar',
  ),
  'messages' => 
  array (
    'logout' => 'Çıkış',
    'close' => 'Kapat',
    'sg.datatables.confirmMessage' => 'Emin misiniz?',
    'sg.datatables.selectError' => 'En az bir eleman seçmelisiniz.',
    'sg.datatables.actions.title' => 'İşlemler',
    'sg.datatables.actions.show' => 'Göster',
    'sg.datatables.actions.edit' => 'Düzenle',
    'sg.datatables.daterange.apply' => 'Uygula',
    'sg.datatables.daterange.cancel' => 'Vazgeç',
    'sg.datatables.daterange.format' => 'DD-MM-YYYY',
    'vich_uploader.form_label.delete_confirm' => 'Sil?',
    'vich_uploader.link.download' => 'İndir',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'Bu değer olumsuz olmalıdır.',
    'This value should be true.' => 'Bu değer olumlu olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu değerin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu değer boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçtiğiniz değer geçerli bir seçenek değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'En az {{ limit }} seçenek belirtmelisiniz.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'En çok {{ limit }} seçenek belirtmelisiniz.',
    'One or more of the given values is invalid.' => 'Verilen değerlerden bir veya daha fazlası geçersiz.',
    'This field was not expected.' => 'Bu alan beklenen olmadı.',
    'This field is missing.' => 'Bu alan, eksik',
    'This value is not a valid date.' => 'Bu değer doğru bir tarih biçimi değildir.',
    'This value is not a valid datetime.' => 'Bu değer doğru bir tarihsaat biçimi değildir.',
    'This value is not a valid email address.' => 'Bu değer doğru bir e-mail adresi değildir.',
    'The file could not be found.' => 'Dosya bulunamadı.',
    'The file is not readable.' => 'Dosya okunabilir değil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük ({{ size }} {{ suffix }}). İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Dosyanın mime tipi geçersiz ({{ type }}). İzin verilen mime tipleri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu değer {{ limit }} ve altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu değer çok uzun. {{ limit }} karakter veya daha az olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu değer {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu değer çok kısa. {{ limit }} karakter veya daha fazla olmalıdır.',
    'This value should not be blank.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should not be null.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should be null.' => 'Bu değer boş bırakılmalıdır.',
    'This value is not valid.' => 'Bu değer geçerli değil.',
    'This value is not a valid time.' => 'Bu değer doğru bir saat değil.',
    'This value is not a valid URL.' => 'Bu değer doğru bir URL değil.',
    'The two values should be equal.' => 'İki değer eşit olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük. İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Dosya çok büyük.',
    'The file could not be uploaded.' => 'Dosya yüklenemiyor.',
    'This value should be a valid number.' => 'Bu değer geçerli bir rakam olmalıdır.',
    'This file is not a valid image.' => 'Bu dosya geçerli bir resim değildir.',
    'This is not a valid IP address.' => 'Bu geçerli bir IP adresi değildir.',
    'This value is not a valid language.' => 'Bu değer geçerli bir lisan değil.',
    'This value is not a valid locale.' => 'Bu değer geçerli bir yer değildir.',
    'This value is not a valid country.' => 'Bu değer geçerli bir ülke değildir.',
    'This value is already used.' => 'Bu değer şu anda kullanımda.',
    'The size of the image could not be detected.' => 'Resmin boyutu saptanamıyor.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Resmin genişliği çok büyük ({{ width }}px). İzin verilen en büyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Resmin genişliği çok küçük ({{ width }}px). En az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Resmin yüksekliği çok büyük ({{ height }}px). İzin verilen en büyük yükseklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Resmin yüksekliği çok küçük ({{ height }}px). En az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu değer kullanıcının şu anki şifresi olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu değer tam olarak {{ limit }} karakter olmaldır.',
    'The file was only partially uploaded.' => 'Dosya sadece kısmen yüklendi.',
    'No file was uploaded.' => 'Hiçbir dosya yüklenmedi.',
    'No temporary folder was configured in php.ini.' => 'php.ini içerisinde geçici dizin tanımlanmadı.',
    'Cannot write temporary file to disk.' => 'Geçici dosya diske yazılamıyor.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP eklentisi dosyanın yüklemesini başarısız kıldı.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu derlem {{ limit }} veya daha çok eleman içermelidir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu derlem {{ limit }} veya daha az eleman içermelidir.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu derlem {{ limit }} eleman içermelidir.',
    'Invalid card number.' => 'Geçersiz kart numarası.',
    'Unsupported card type or invalid card number.' => 'Desteklenmeyen kart tipi veya geçersiz kart numarası.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu geçerli bir Uluslararası Banka Hesap Numarası (IBAN) değildir.',
    'This value is not a valid ISBN-10.' => 'Bu değer geçerli bir ISBN-10 değildir.',
    'This value is not a valid ISBN-13.' => 'Bu değer geçerli bir ISBN-13 değildir.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Bu değer geçerli bir ISBN-10 veya ISBN-13 değildir.',
    'This value is not a valid ISSN.' => 'Bu değer geçerli bir ISSN değildir.',
    'This value is not a valid currency.' => 'Bu değer geçerli bir para birimi değil.',
    'This value should be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmalıdır.',
    'This value should be greater than {{ compared_value }}.' => 'Bu değer {{ compared_value }} değerinden büyük olmalıdır.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit veya büyük olmalıdır.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmalıdır.',
    'This value should be less than {{ compared_value }}.' => 'Bu değer {{ compared_value }} değerinden düşük olmalıdır.',
    'This value should be less than or equal to {{ compared_value }}.' => '.Bu değer {{ compared_value }} ile eşit veya düşük olmalıdır.',
    'This value should not be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmamalıdır.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmamalıdır.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Resim oranı çok büyük ({{ ratio }}). İzin verilen maksimum oran: {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Resim oranı çok ufak ({{ ratio }}). Beklenen minimum oran {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Resim karesi ({{ width }}x{{ height }}px). Kare resimlerine izin verilmiyor.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Resim manzara odaklı ({{ width }}x{{ height }}px). Manzara odaklı resimlere izin verilmiyor.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Resim portre odaklı ({{ width }}x{{ height }}px). Portre odaklı resimlere izin verilmiyor.',
    'An empty file is not allowed.' => 'Boş bir dosyaya izin verilmiyor.',
    'The host could not be resolved.' => 'Sunucu çözülemedi.',
    'This value does not match the expected {{ charset }} charset.' => 'Bu değer beklenen {{ charset }} karakter kümesiyle eşleşmiyor.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu geçerli bir İşletme Tanımlayıcı Kodu (BIC) değildir.',
    'Error' => 'Hata',
    'This is not a valid UUID.' => 'Bu geçerli bir UUID değildir.',
    'This value should be a multiple of {{ compared_value }}.' => 'Bu değer {{ compare_value }} değerinin katlarından biri olmalıdır.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bu İşletme Tanımlayıcı Kodu (BIC), IBAN {{ iban }} ile ilişkili değildir.',
    'fos_user.username.already_used' => 'Kullanıcı adı zaten kullanılıyor.',
    'fos_user.username.blank' => 'Lütfen bir kullanıcı adı girin.',
    'fos_user.username.short' => 'Kullanıcı adı çok kısa.',
    'fos_user.username.long' => 'Kullanıcı adı çok uzun.',
    'fos_user.email.already_used' => 'E-posta zaten kullanılıyor.',
    'fos_user.email.blank' => 'Lütfen bir e-posta girin.',
    'fos_user.email.short' => 'E-posta çok kısa.',
    'fos_user.email.long' => 'E-posta çok uzun.',
    'fos_user.email.invalid' => 'E-posta geçerli değil.',
    'fos_user.password.blank' => 'Lütfen bir parola girin.',
    'fos_user.password.short' => 'Parola çok kısa.',
    'fos_user.password.mismatch' => 'Şifreler uyuşmuyor!.',
    'fos_user.new_password.blank' => 'Lütfen yeni parolayı girin.',
    'fos_user.new_password.short' => 'Yeni parola çok kısa.',
    'fos_user.current_password.invalid' => 'Girilen parola geçersiz.',
    'fos_user.group.blank' => 'Lütfen bir isim girin.',
    'fos_user.group.short' => 'İsim çok kısa.',
    'fos_user.group.long' => 'İsim çok uzun.',
    'fos_group.name.already_used' => 'İsim zaten kullanılıyor..',
    'This form should not contain extra fields.' => 'Form ekstra alanlar içeremez.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklenen dosya boyutu çok yüksek. Lütfen daha küçük bir dosya yüklemeyi deneyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF fişi geçersiz. Formu tekrar göndermeyi deneyin.',
    'This value is not a valid HTML5 color.' => 'Bu değer, geçerli bir HTML5 rengi değil.',
    'Please enter a valid birthdate.' => 'Lütfen geçerli bir doğum tarihi girin.',
    'The selected choice is invalid.' => 'Seçilen seçim geçersiz.',
    'The collection is invalid.' => 'Koleksiyon geçersiz.',
    'Please select a valid color.' => 'Lütfen geçerli bir renk seçin.',
    'Please select a valid country.' => 'Lütfen geçerli bir ülke seçin.',
    'Please select a valid currency.' => 'Lütfen geçerli bir para birimi seçin.',
    'Please choose a valid date interval.' => 'Lütfen geçerli bir tarih aralığı seçin.',
    'Please enter a valid date and time.' => 'Lütfen geçerli bir tarih ve saat girin.',
    'Please enter a valid date.' => 'Lütfen geçerli bir tarih giriniz.',
    'Please select a valid file.' => 'Lütfen geçerli bir dosya seçin.',
    'The hidden field is invalid.' => 'Gizli alan geçersiz.',
    'Please enter an integer.' => 'Lütfen bir tam sayı girin.',
    'Please select a valid language.' => 'Lütfen geçerli bir dil seçin.',
    'Please select a valid locale.' => 'Lütfen geçerli bir yerel ayar seçin.',
    'Please enter a valid money amount.' => 'Lütfen geçerli bir para tutarı girin.',
    'Please enter a number.' => 'Lütfen bir numara giriniz.',
    'The password is invalid.' => 'Şifre geçersiz.',
    'Please enter a percentage value.' => 'Lütfen bir yüzde değeri girin.',
    'The values do not match.' => 'Değerler eşleşmiyor.',
    'Please enter a valid time.' => 'Lütfen geçerli bir zaman girin.',
    'Please select a valid timezone.' => 'Lütfen geçerli bir saat dilimi seçin.',
    'Please enter a valid URL.' => 'Lütfen geçerli bir giriniz URL.',
    'Please enter a valid search term.' => 'Lütfen geçerli bir arama terimi girin.',
    'Please provide a valid phone number.' => 'lütfen geçerli bir telefon numarası sağlayın.',
    'The checkbox has an invalid value.' => 'Onay kutusunda geçersiz bir değer var.',
    'Please enter a valid email address.' => 'Lütfen geçerli bir e-posta adresi girin.',
    'Please select a valid option.' => 'Lütfen geçerli bir seçenek seçin.',
    'Please select a valid range.' => 'Lütfen geçerli bir aralık seçin.',
    'Please enter a valid week.' => 'Lütfen geçerli bir hafta girin.',
    'This value should be valid JSON.' => 'Bu değer için geçerli olmalıdır JSON.',
    'This collection should contain only unique elements.' => 'Bu grup yalnızca benzersiz öğeler içermelidir.',
    'This value should be positive.' => 'Bu değer pozitif olmalı.',
    'This value should be either positive or zero.' => 'Bu değer pozitif veya sıfır olmalıdır.',
    'This value should be negative.' => 'Bu değer negatif olmalıdır.',
    'This value should be either negative or zero.' => 'Bu değer, negatif veya sıfır olmalıdır.',
    'This value is not a valid timezone.' => 'Bu değer, geçerli bir saat dilimi değil.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Bu parola, bir veri ihlali nedeniyle sızdırılmıştır ve kullanılmamalıdır. Lütfen başka bir şifre kullanın.',
    'This value should be between {{ min }} and {{ max }}.' => 'Bu değer arasında olmalıdır {{ min }} ve {{ max }}.',
    'This value is not a valid hostname.' => 'Bu değer, geçerli bir ana bilgisayar adı değil.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Bu gruptaki öğe sayısı birden fazla olmalıdır {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Bu değer aşağıdaki kısıtlamalardan birini karşılamalıdır:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Bu gruptaki her öğe kendi kısıtlamalarını karşılamalıdır.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Bu değer geçerli bir Uluslararası Menkul Kıymetler Kimlik Numarası değil (ISIN).',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Önceki',
    'label_next' => 'Sonraki',
    'filter_searchword' => 'Kelime ara...',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bir yetkilendirme istisnası oluştu.',
    'Authentication credentials could not be found.' => 'Kimlik bilgileri bulunamadı.',
    'Authentication request could not be processed due to a system problem.' => 'Bir sistem hatası nedeniyle yetkilendirme isteği işleme alınamıyor.',
    'Invalid credentials.' => 'Geçersiz kimlik bilgileri.',
    'Cookie has already been used by someone else.' => 'Çerez bir başkası tarafından zaten kullanılmıştı.',
    'Not privileged to request the resource.' => 'Kaynak talebi için imtiyaz bulunamadı.',
    'Invalid CSRF token.' => 'Geçersiz CSRF fişi.',
    'No authentication provider found to support the authentication token.' => 'Yetkilendirme fişini destekleyecek yetkilendirme sağlayıcısı bulunamadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Oturum bulunamadı, zaman aşımına uğradı veya çerezler etkin değil.',
    'No token could be found.' => 'Fiş bulunamadı.',
    'Username could not be found.' => 'Kullanıcı adı bulunamadı.',
    'Account has expired.' => 'Hesap zaman aşımına uğradı.',
    'Credentials have expired.' => 'Kimlik bilgileri zaman aşımına uğradı.',
    'Account is disabled.' => 'Hesap engellenmiş.',
    'Account is locked.' => 'Hesap kilitlenmiş.',
    'Too many failed login attempts, please try again later.' => 'Çok fazla başarısız giriş denemesi, lütfen daha sonra tekrar deneyin.',
    'Invalid or expired login link.' => 'Geçersiz veya süresi dolmuş oturum açma bağlantısı.',
  ),
));
$catalogueZh->addFallbackCatalogue($catalogueTr);

return $catalogue;
