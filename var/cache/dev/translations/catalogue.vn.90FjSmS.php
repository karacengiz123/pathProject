<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vn', array (
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Xoá?',
    'vich_uploader.link.download' => 'Tải',
  ),
));

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
$catalogue->addFallbackCatalogue($catalogueTr);

return $catalogue;
