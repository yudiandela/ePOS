<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('products')->insert([
            [
                'name'        => 'TAFFWARE USB EXTERNAL SOUNDCARD LIVE BROADCAST MICROPHONE HEADSET V8',
                'slug'        => time() . '-' . Str::slug('TAFFWARE USB EXTERNAL SOUNDCARD LIVE BROADCAST MICROPHONE HEADSET V8'),
                'description' => 'Est cillum elit consectetur ad eu ut aute cupidatat quis ex pariatur. Ipsum eu commodo nisi ea enim enim veniam. Ullamco in ea dolor est ea cupidatat qui. Id mollit adipisicing non fugiat. Amet ullamco labore aliquip id ipsum velit tempor ullamco tempor exercitation proident velit do minim. Aliqua minim labore enim eu cupidatat tempor laborum adipisicing exercitation cillum ut cillum proident. Id aliquip velit est magna ullamco sit nostrud.
                                Nostrud labore veniam consectetur ex pariatur laboris laboris. Deserunt elit excepteur fugiat enim laborum cillum sunt officia esse. Qui aute nisi enim exercitation. Esse anim non voluptate voluptate velit. Enim nisi dolor qui Lorem. Non exercitation ullamco tempor est ex laboris voluptate consequat mollit nisi cupidatat voluptate ad occaecat.
                                Enim pariatur nisi nisi esse labore consequat irure fugiat. Qui reprehenderit ex laboris laboris cupidatat consectetur ut labore commodo pariatur pariatur pariatur exercitation. Cupidatat culpa consequat labore laboris est proident mollit enim tempor non non. Aliquip ea aute commodo ullamco eu proident nisi fugiat in culpa aliquip est exercitation. Qui in non et minim nostrud esse excepteur cillum laborum. Fugiat ullamco deserunt ipsum consequat do commodo.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/taffware-usb-external-soundcard-live-broadcast-microphone-headset-v8.jpg'
            ],
            [
                'name'        => 'ASUS RTX 2060 6GB D6 DUAL ADVANCE',
                'slug'        => time() . '-' . Str::slug('ASUS RTX 2060 6GB D6 DUAL ADVANCE'),
                'description' => 'Cillum tempor sit Lorem pariatur consectetur consectetur non Lorem exercitation dolore officia. Do commodo irure nulla culpa eu. Non nisi officia qui adipisicing aute deserunt. Cupidatat occaecat non aliquip exercitation Lorem pariatur eu tempor fugiat proident aliqua ea ea amet. Ad labore cillum minim exercitation.
                                Nulla adipisicing laboris elit ex ea incididunt labore sint. Cillum magna ea pariatur consectetur ad cillum amet labore ex. In in laboris cillum do non esse enim est.
                                Proident qui minim eu dolore aliquip ad Lorem. Esse tempor irure incididunt enim veniam aute anim quis do ea qui nisi. Ut non reprehenderit sit minim magna anim nostrud proident nulla quis est duis et. Occaecat minim officia ex elit exercitation. Laborum veniam pariatur dolor veniam qui officia cillum nulla mollit ea laborum mollit id.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/asus-rtx-2060-6gb-d6-dual-advance.jpg'
            ],
            [
                'name'        => 'ASUS RTX 2060 6GB D6 STRIX ADVANCE',
                'slug'        => time() . '-' . Str::slug('ASUS RTX 2060 6GB D6 STRIX ADVANCE'),
                'description' => 'Do pariatur incididunt nulla elit aliqua sint duis quis nulla deserunt. Id voluptate aliquip sunt quis sunt quis sint veniam deserunt cupidatat nisi sit ullamco. Id cillum nisi excepteur quis veniam.
                                Ex dolor aliqua consequat id tempor fugiat do culpa consectetur eiusmod quis consectetur. Quis laborum ipsum exercitation reprehenderit nostrud aliqua. Eiusmod sit est velit aute irure elit esse magna. Cupidatat pariatur quis ea esse aliqua mollit. Excepteur laborum officia proident irure ut quis ipsum eiusmod proident sit qui. Exercitation proident pariatur tempor velit adipisicing in amet cillum.
                                Ad mollit magna voluptate nostrud minim do occaecat anim. Fugiat minim occaecat do anim in. Quis sint laborum est sit culpa ipsum amet tempor eu quis reprehenderit esse. Duis magna consectetur amet non irure et in. Irure proident qui id irure ex ullamco sit. Proident cupidatat pariatur consectetur sint ad voluptate proident.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/asus-rtx-2060-6gb-d6-strix-advance.jpg'
            ],
            [
                'name'        => 'CASE GAMEMAX EXPEDITION 3FANUSB20USB30',
                'slug'        => time() . '-' . Str::slug('CASE GAMEMAX EXPEDITION 3FANUSB20USB30'),
                'description' => 'Consequat aliqua eu mollit duis enim cillum pariatur elit velit. Labore non aute adipisicing reprehenderit. Adipisicing ipsum et minim adipisicing sunt. Labore magna laborum labore ea dolore nisi quis exercitation non ullamco occaecat. Non sint irure adipisicing id. Elit pariatur qui est eiusmod est. Aute elit occaecat amet aliquip dolore.
                                Commodo sint id incididunt exercitation aliqua eu pariatur aliquip nostrud mollit eiusmod reprehenderit irure esse. Sint nostrud enim enim aliquip aute commodo exercitation. Ullamco elit dolore eiusmod nulla in. Sunt incididunt incididunt ipsum veniam. Et Lorem laboris aute adipisicing nisi ea anim voluptate aute exercitation. Veniam aliquip ea ea ullamco laborum. Occaecat laborum ipsum cillum pariatur non occaecat nulla exercitation.
                                Duis consectetur et aute sit sint id laborum pariatur laborum. Ullamco reprehenderit proident culpa irure commodo tempor aliquip esse proident dolor labore. Laborum anim labore proident sunt irure ipsum reprehenderit. Elit nisi deserunt voluptate ipsum sit et. Id aute amet laborum officia magna irure nostrud magna cillum veniam esse.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/case-gamemax-expedition-3fanusb20usb30.jpg'
            ],
            [
                'name'        => 'CASING PC THERMALTAKE LEVEL 20 VT MICRO CASE MINI ITX MICRO ATX',
                'slug'        => time() . '-' . Str::slug('CASING PC THERMALTAKE LEVEL 20 VT MICRO CASE MINI ITX MICRO ATX'),
                'description' => 'Laborum id aute deserunt ex quis ex duis dolore ullamco esse. Quis sunt exercitation qui voluptate ea mollit eu commodo tempor ea incididunt sunt dolore consectetur. Quis sunt fugiat magna commodo ut culpa deserunt mollit Lorem velit. Ad ullamco cillum sint aute aliqua culpa nostrud occaecat consectetur. Est veniam eu commodo dolor Lorem pariatur sunt sint dolor ut culpa.
                                Ea et ut esse sunt mollit Lorem dolore ullamco ad pariatur anim mollit enim velit. Ex minim in occaecat esse laboris proident in adipisicing. Non tempor id nisi minim eiusmod culpa cupidatat reprehenderit exercitation anim. Nostrud quis cillum reprehenderit eu enim pariatur laboris magna minim anim occaecat anim sit duis. Et cupidatat voluptate nostrud esse minim. Irure dolore magna sint culpa ad consequat occaecat id proident irure laborum.
                                Anim eu laboris consequat ea do dolore reprehenderit voluptate ea nisi irure. Elit eiusmod aliquip aliqua exercitation nulla. Officia duis et laborum ipsum duis. Tempor dolor nisi nulla cupidatat consequat tempor elit voluptate elit.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/casing-pc-thermaltake-level-20-vt-micro-case-mini-itx-micro-atx.jpg'
            ],
            [
                'name'        => 'CORSAIR MEMORY 8GB 1X8GB DDR4 2400MHZ RAM FOR PC',
                'slug'        => time() . '-' . Str::slug('CORSAIR MEMORY 8GB 1X8GB DDR4 2400MHZ RAM FOR PC'),
                'description' => 'Nulla ad culpa et aute occaecat. Incididunt ipsum aute est amet enim aute est nostrud id officia incididunt. Consectetur exercitation nostrud est ipsum esse exercitation amet velit. Tempor sint qui nostrud aliquip nulla cupidatat do.
                                Ad nostrud consequat do pariatur irure veniam aliqua enim. Elit occaecat exercitation dolore dolor laboris minim cillum esse elit magna id ipsum. Ea tempor sit occaecat aliquip ex laborum incididunt incididunt aliqua.
                                Cupidatat magna laboris incididunt id occaecat ea dolore laborum cillum consequat reprehenderit est. Proident officia duis reprehenderit dolor ipsum incididunt do. Et consectetur deserunt sunt labore fugiat consequat nisi eu. Aliqua ex duis est incididunt ea aliquip non ipsum nulla aliqua aliquip fugiat minim. Enim sit labore reprehenderit aliquip cillum occaecat aute laborum magna cupidatat. Velit cupidatat consectetur quis elit voluptate qui voluptate dolore nisi tempor amet enim. Aliqua id laboris ullamco esse sit qui.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/corsair-memory-8gb-1x8gb-ddr4-2400mhz-ram-for-pc.jpg'
            ],
            [
                'name'        => 'CORSAIR RM SERIES 850W MODULAR GOLD',
                'slug'        => time() . '-' . Str::slug('CORSAIR RM SERIES 850W MODULAR GOLD'),
                'description' => 'Velit magna non occaecat quis culpa irure voluptate magna ut ipsum enim dolore ad cupidatat. Qui aute labore esse enim fugiat sint aliquip id sit quis pariatur ut occaecat. Aliqua laboris anim consequat pariatur. Elit et exercitation deserunt in qui ullamco mollit consequat minim laboris ut. Nostrud incididunt culpa nostrud non duis magna laborum duis.
                                Laboris amet culpa ullamco ut. Quis deserunt exercitation culpa anim sunt minim commodo ad commodo sint anim ea. Qui ex anim laboris est nisi consectetur enim nisi qui. Reprehenderit anim enim aute exercitation.
                                Occaecat aliqua sint enim ut irure culpa. Est dolore qui consectetur eiusmod eiusmod elit sint aliqua. Consectetur irure ut et minim commodo. In excepteur consequat anim nisi commodo magna. Ipsum in irure ad reprehenderit nulla officia commodo do qui qui irure aliqua nostrud.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/corsair-rm-series-850w-modular-gold.jpg'
            ],
            [
                'name'        => 'DIGITAL ALLIANCE N5 BLACK TRANSPARENT WINDOW MICRO ATX GAMING CHASSIS',
                'slug'        => time() . '-' . Str::slug('DIGITAL ALLIANCE N5 BLACK TRANSPARENT WINDOW MICRO ATX GAMING CHASSIS'),
                'description' => 'In nulla reprehenderit fugiat quis reprehenderit tempor mollit aute excepteur excepteur id irure consectetur. Nulla proident tempor non labore ipsum exercitation ex amet. Minim sit labore veniam enim deserunt excepteur Lorem amet. Do excepteur enim eiusmod proident Lorem enim ipsum exercitation ullamco.
                                Mollit mollit fugiat esse ipsum fugiat amet ut ea irure ullamco tempor do. Exercitation dolore aute dolor velit. Irure anim dolor officia incididunt laboris eu voluptate ad. Nulla proident ad ad culpa do nostrud nisi cillum do fugiat cupidatat. Enim duis fugiat culpa mollit id duis tempor.
                                Tempor nostrud laborum reprehenderit mollit et id id deserunt. Est pariatur irure dolore incididunt irure magna. Minim aliquip dolore proident enim adipisicing aute do irure irure eiusmod ex magna deserunt. Pariatur veniam nisi sit fugiat cillum deserunt aliquip proident duis ex mollit incididunt consectetur. Reprehenderit velit dolor cillum cillum ea aliquip voluptate culpa dolore ex do dolor. Aute proident ea ea aliquip dolore tempor.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/digital-alliance-n5-black-transparent-window-micro-atx-gaming-chassis.jpg'
            ],
            [
                'name'        => 'GIGABYTE Z390 M GAMING LGA 1151 MOTHERBOARD',
                'slug'        => time() . '-' . Str::slug('GIGABYTE Z390 M GAMING LGA 1151 MOTHERBOARD'),
                'description' => 'Magna anim excepteur aliquip tempor minim ullamco anim consectetur sunt proident nisi dolore. Elit ea amet ea labore ea labore veniam et. Minim sunt cillum magna irure fugiat nisi cupidatat non excepteur in exercitation reprehenderit enim.
                                Eiusmod voluptate fugiat id quis commodo magna voluptate laborum. Sit labore aliquip cupidatat sit voluptate nostrud ut cupidatat esse. Nulla proident tempor consectetur excepteur occaecat commodo incididunt proident et veniam irure pariatur.
                                Voluptate veniam minim pariatur voluptate aliqua. Enim occaecat elit nisi sit fugiat labore amet eiusmod irure eiusmod incididunt sunt nisi sit. Irure consectetur ex exercitation esse amet aliquip. Culpa cillum ut veniam ullamco labore duis ullamco eiusmod officia deserunt. Labore sint non eu ex culpa nostrud culpa amet ea commodo velit aliquip deserunt. Veniam eiusmod non elit duis proident anim consequat sit aliquip mollit anim.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/gigabyte-z390-m-gaming-lga-1151-motherboard.jpg'
            ],
            [
                'name'        => 'INTEL CORE I5 8600 DESKTOP PROCESSOR 6 CORE UP TO 43GHZ I5 8600',
                'slug'        => time() . '-' . Str::slug('INTEL CORE I5 8600 DESKTOP PROCESSOR 6 CORE UP TO 43GHZ I5 8600'),
                'description' => 'Culpa cillum consequat sint incididunt nisi enim adipisicing ea. Exercitation cupidatat id ullamco nostrud sint mollit anim. Nisi ea ex dolore aliquip amet cillum culpa est velit velit elit. Magna laborum id aliquip ex enim aliquip id ex occaecat sint.
                                Dolore esse Lorem anim elit aliqua laborum deserunt. Veniam nisi velit est culpa et voluptate anim quis. Minim exercitation magna enim id magna consequat nulla proident velit. Exercitation mollit qui proident elit aliqua reprehenderit velit quis. Qui veniam deserunt duis consequat laboris consectetur magna est proident labore quis reprehenderit officia. Veniam fugiat voluptate nisi est et ad occaecat ipsum.
                                Quis est aute adipisicing ex eu. Minim consequat amet voluptate dolor cillum Lorem ullamco do culpa esse cillum tempor. Tempor est nulla pariatur incididunt esse aliqua labore proident anim labore. Pariatur culpa voluptate pariatur ex sint Lorem.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/intel-core-i5-8600-desktop-processor-6-core-up-to-43ghz-i5-8600.jpg'
            ],
            [
                'name'        => 'MAINBOARD MOTHERBOARD INTEL ECS B250M4 M20 1151 DDR4',
                'slug'        => time() . '-' . Str::slug('MAINBOARD MOTHERBOARD INTEL ECS B250M4 M20 1151 DDR4'),
                'description' => 'Sit esse cupidatat duis adipisicing nostrud ea ut. Cupidatat sunt laboris irure voluptate velit ut voluptate labore et duis excepteur aute eiusmod. Duis aliqua ullamco dolor eiusmod ipsum ut reprehenderit excepteur. Nostrud duis sint veniam dolore et dolor qui ut officia tempor. Labore adipisicing exercitation in aliqua deserunt adipisicing voluptate adipisicing cillum incididunt magna ad tempor deserunt.
                                Laborum ut velit est sit irure est excepteur. Sit laboris ut labore aliquip consectetur. Elit ullamco Lorem dolor ex occaecat est id cillum magna excepteur. Qui ullamco fugiat sunt deserunt aliqua quis adipisicing exercitation commodo magna fugiat mollit non laborum. Cillum magna est duis adipisicing qui Lorem laborum nulla elit commodo dolore ad cillum. Incididunt consectetur dolor aliquip labore tempor eiusmod ea ut. Aute sint veniam velit quis deserunt et do fugiat non officia dolore sit voluptate proident.
                                Excepteur quis anim anim aliquip fugiat minim velit reprehenderit commodo labore. Cupidatat ipsum sint labore adipisicing sint velit eu commodo nostrud ad in culpa. Excepteur mollit cupidatat culpa labore non ea aute ea officia dolore.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/mainboard-motherboard-intel-ecs-b250m4-m20-1151-ddr4.jpg'
            ],
            [
                'name'        => 'MOTHERBOARD MSI MEG X570 ACE AMD AM4 SOCKET X570 DDR4',
                'slug'        => time() . '-' . Str::slug('MOTHERBOARD MSI MEG X570 ACE AMD AM4 SOCKET X570 DDR4'),
                'description' => 'Sit amet id adipisicing aliqua aliqua anim exercitation Lorem sunt. Aliqua magna laboris in culpa mollit. Eu ut dolor tempor ea officia voluptate occaecat mollit. Labore ea sunt voluptate et sunt duis laboris enim enim.
                                Ipsum eu mollit occaecat duis duis culpa. Aliqua eu ullamco ex ipsum duis nulla anim labore commodo ullamco. Tempor aute veniam do deserunt duis proident. Sint pariatur veniam minim veniam minim.
                                Do aute aute sunt ut laborum. In veniam sit non laborum proident commodo irure id. Dolore sint tempor officia nisi magna ex. In et quis commodo magna laborum quis occaecat esse velit. Laborum Lorem fugiat reprehenderit sunt proident amet nostrud amet ipsum culpa mollit deserunt. Sunt consequat ullamco culpa aute dolor consectetur tempor laboris exercitation.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/motherboard-msi-meg-x570-ace-amd-am4-socket-x570-ddr4.jpg'
            ],
            [
                'name'        => 'MOTHERBOARD MSI X570 A PRO SUPPORT AM4 X570 A PRO',
                'slug'        => time() . '-' . Str::slug('MOTHERBOARD MSI X570 A PRO SUPPORT AM4 X570 A PRO'),
                'description' => 'Fugiat fugiat ad ad reprehenderit incididunt commodo sunt. Reprehenderit excepteur anim consectetur sit duis eu qui aliqua officia ipsum. Nostrud veniam minim ullamco elit officia ad. Lorem exercitation ullamco consectetur officia. Cupidatat quis dolore tempor consectetur ullamco. Ea irure laborum excepteur aliquip culpa magna amet Lorem voluptate laborum. Aute eiusmod tempor est nulla duis nostrud id elit voluptate ea sunt amet consectetur deserunt.
                                Consectetur fugiat aliquip aute fugiat. Excepteur veniam nisi aliquip nulla. Officia ut qui velit proident non nostrud ad anim ex quis. Sit eiusmod dolor velit cupidatat officia commodo anim eiusmod amet non est. Ut ipsum aute veniam ex in duis culpa reprehenderit incididunt ipsum anim. Adipisicing Lorem commodo quis quis dolore sint quis excepteur.
                                Commodo eiusmod consectetur sit excepteur adipisicing consectetur in sint Lorem nulla cillum exercitation laborum. Aute aute mollit occaecat cupidatat reprehenderit in amet voluptate eiusmod pariatur est ex duis. Aute adipisicing laborum sunt in sunt proident et officia. Labore laboris veniam sunt dolore in cupidatat esse duis dolore aliqua non consectetur fugiat ad.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/motherboard-msi-x570-a-pro-support-am4-x570-a-pro.jpg'
            ],
            [
                'name'        => 'MSI MAG B365M MORTAR INTEL B365 LGA1151 DDR4 MICRO ATX MOTHERBOARD',
                'slug'        => time() . '-' . Str::slug('MSI MAG B365M MORTAR INTEL B365 LGA1151 DDR4 MICRO ATX MOTHERBOARD'),
                'description' => 'Amet anim reprehenderit dolore ipsum exercitation et ipsum irure aliqua veniam nostrud sit. Non cillum duis ut eu. Et deserunt laboris anim sunt anim. Enim nisi excepteur exercitation occaecat pariatur. Irure tempor dolor aliqua quis ullamco deserunt nulla sunt labore.
                                Fugiat aute do nisi magna enim aute excepteur laboris ut velit. Cupidatat amet tempor aute excepteur consequat fugiat elit ut incididunt do aute elit. Ullamco quis ad pariatur ad occaecat dolore tempor.
                                Deserunt enim nostrud eiusmod occaecat amet. Id qui in aliquip deserunt eiusmod velit exercitation aute exercitation adipisicing qui velit velit. Sint irure magna aliquip ut magna dolor. Excepteur nostrud ad magna ad officia ullamco veniam proident sunt ex ut consectetur sunt. Veniam minim consequat minim minim adipisicing id labore. Laboris proident aliquip aliquip exercitation consectetur minim laborum aliqua est anim aute mollit aliqua occaecat. Proident nisi officia magna consequat sint Lorem eu commodo aliquip veniam ad sunt enim.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/msi-mag-b365m-mortar-intel-b365-lga1151-ddr4-micro-atx-motherboard.jpg'
            ],
            [
                'name'        => 'MSI RADEON RX 5700 XT MECH OC 8GB GDDR6 DUAL FAN',
                'slug'        => time() . '-' . Str::slug('MSI RADEON RX 5700 XT MECH OC 8GB GDDR6 DUAL FAN'),
                'description' => 'Do adipisicing consectetur nisi amet elit dolore esse duis Lorem mollit. Magna sit commodo tempor duis. Anim duis fugiat commodo tempor quis excepteur proident. Commodo incididunt voluptate aliquip qui sint veniam laborum qui. Sit reprehenderit pariatur laborum aliqua magna aliquip magna laboris.
                                Est officia commodo labore proident. Voluptate sit fugiat laborum ex. Minim tempor veniam sunt cupidatat laboris proident ex quis ut. Est qui ut ex elit.
                                Ea velit occaecat consequat amet fugiat non sint excepteur ipsum. Deserunt exercitation cillum officia duis esse cupidatat exercitation cillum labore proident. Et non reprehenderit ut est sunt. Consectetur consequat cillum cupidatat sint consectetur consectetur aliquip esse nulla aliqua. Eiusmod amet veniam laborum velit in id exercitation aute pariatur ut. Proident culpa minim ea tempor elit Lorem laboris ut anim. Ullamco sint eu officia irure excepteur labore Lorem quis aliquip laborum laborum nulla elit ea.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/msi-radeon-rx-5700-xt-mech-oc-8gb-gddr6-dual-fan.jpg'
            ],
            [
                'name'        => 'POWER SUPPLY EVGA 600BR 80 BRONZE 600W',
                'slug'        => time() . '-' . Str::slug('POWER SUPPLY EVGA 600BR 80 BRONZE 600W'),
                'description' => 'Ullamco sint sit laborum nulla velit ut. Nulla nulla pariatur quis proident. Voluptate veniam anim veniam incididunt amet ad officia mollit tempor ex elit quis. Ullamco laboris magna veniam est quis id ipsum. Non Lorem deserunt ad sint pariatur nisi. Laboris non ad veniam eiusmod consectetur.
                                Aliqua commodo dolore commodo consectetur enim. Et excepteur ut do proident. Deserunt mollit minim voluptate aliqua enim et sit ullamco. Eu aliqua fugiat in elit esse Lorem ut dolore in officia aliquip. Irure qui nisi cillum Lorem. Mollit excepteur aliquip irure magna. Enim officia dolore deserunt quis commodo.
                                Voluptate et magna occaecat enim aliqua sunt ut ad eiusmod est elit laborum tempor. Eu ex cupidatat qui mollit. Consequat cupidatat excepteur consequat culpa sint esse ea eu aute quis esse tempor commodo. Cillum proident in laboris eu consectetur eu non in sint qui aliquip quis dolor. Duis nostrud tempor occaecat aliquip adipisicing qui elit laboris deserunt incididunt laboris excepteur. Ut qui incididunt adipisicing quis cillum culpa eu enim culpa consectetur. Culpa labore ad amet officia mollit sunt tempor duis.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/power-supply-evga-600br-80-bronze-600w.jpg'
            ],
            [
                'name'        => 'POWER SUPPLY GAMEMAX 550WATT PSU GP 550 GP550 80 PLUS BRONZE',
                'slug'        => time() . '-' . Str::slug('POWER SUPPLY GAMEMAX 550WATT PSU GP 550 GP550 80 PLUS BRONZE'),
                'description' => 'Ex irure sit ea nulla dolor quis nisi culpa dolor anim consequat amet culpa. Anim aliquip cillum magna ullamco. Eu enim et fugiat veniam reprehenderit. Proident occaecat quis nisi pariatur mollit laborum cupidatat exercitation deserunt sint. Veniam duis amet enim nisi esse aliqua. Eu incididunt elit fugiat aliqua aliquip exercitation aliqua exercitation id mollit.
                                Esse quis et eu laborum incididunt Lorem veniam nostrud cupidatat. Incididunt nostrud anim proident commodo consequat laboris mollit esse et voluptate. Quis exercitation ullamco sint non voluptate id laboris fugiat dolor et laborum. Ad quis ut et enim quis nisi ipsum exercitation non sint. Laboris tempor veniam cillum veniam. Qui voluptate do aliqua voluptate eu aliqua. Id commodo voluptate irure nulla cillum deserunt adipisicing duis velit culpa nisi sint.
                                Ad ipsum enim eu culpa magna aliqua laborum amet adipisicing qui nulla ut id ullamco. Consectetur laborum sit amet aliqua deserunt ut irure laboris nisi. Veniam dolor et incididunt amet duis.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/power-supply-gamemax-550watt-psu-gp-550-gp550-80-plus-bronze.jpg'
            ],
            [
                'name'        => 'POWER SUPPLY GAMEMAX 650WATT PSU GP650 80 PLUS BRONZE 14CM FAN',
                'slug'        => time() . '-' . Str::slug('POWER SUPPLY GAMEMAX 650WATT PSU GP650 80 PLUS BRONZE 14CM FAN'),
                'description' => 'Esse ex consectetur voluptate proident eu voluptate. Ea pariatur dolore non anim dolore magna. In dolor pariatur deserunt eu do consequat eu Lorem adipisicing ex. Lorem duis mollit cupidatat labore ipsum consequat nostrud do. Nisi consequat excepteur enim eiusmod dolore non velit nostrud pariatur duis laborum tempor quis.
                                Amet in cillum excepteur proident aute tempor magna voluptate exercitation qui. Aliquip magna sit non quis mollit officia pariatur anim laboris nostrud eu ad. Ad excepteur in magna amet. Labore fugiat non esse ea aliqua reprehenderit. Commodo consectetur laboris elit nostrud non id velit sint qui ipsum labore.
                                Occaecat officia do laboris proident aliquip nulla. Adipisicing occaecat eu dolor ut do irure aute cillum. Aliqua ut minim sunt officia nulla ea proident et voluptate culpa officia pariatur. Deserunt do veniam tempor anim do voluptate. Ea et reprehenderit nostrud est esse eiusmod est veniam elit ut laborum ex. Exercitation voluptate amet quis laborum.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/power-supply-gamemax-650watt-psu-gp650-80-plus-bronze-14cm-fan.jpg'
            ],
            [
                'name'        => 'POWER SUPPLY PSU GAMEMAX 700WATT PSU GM 700 GM700',
                'slug'        => time() . '-' . Str::slug('POWER SUPPLY PSU GAMEMAX 700WATT PSU GM 700 GM700'),
                'description' => 'Est officia aliqua Lorem nisi consequat et. Commodo veniam eu irure aliqua sint dolor. Lorem deserunt Lorem quis eiusmod elit occaecat aliquip. Reprehenderit irure cillum consectetur exercitation in eiusmod consectetur fugiat sunt laborum magna occaecat culpa. Proident adipisicing anim anim reprehenderit ut magna nostrud exercitation Lorem in minim irure adipisicing amet. Minim non veniam fugiat elit aliquip laboris excepteur irure Lorem aliquip deserunt tempor ipsum esse. Est est in dolor nisi dolor mollit.
                                Ut deserunt officia laboris est ea consequat adipisicing. Incididunt aliquip in aliquip et laborum cupidatat nulla veniam minim aute et eiusmod dolore. Culpa excepteur tempor laboris incididunt labore voluptate adipisicing laboris proident quis mollit. Do enim proident est nulla sit sunt. Adipisicing nisi velit nisi velit fugiat nisi sit incididunt officia aliqua amet excepteur. Qui eiusmod eu nisi amet velit proident ullamco labore id. Deserunt sint irure eu consequat magna ut id qui duis pariatur nostrud.
                                Excepteur sit cupidatat non reprehenderit. Minim excepteur aliqua duis magna non. Lorem ex ut voluptate aliqua nulla minim consectetur magna ea occaecat adipisicing proident aliquip. Duis proident deserunt nisi culpa esse amet ex sit ut enim culpa sit dolore exercitation.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/power-supply-psu-gamemax-700watt-psu-gm-700-gm700.jpg'
            ],
            [
                'name'        => 'POWER SUPPLY PSU INNOVATION LEGACY SERIES 500W MEET UP 80 GOLD',
                'slug'        => time() . '-' . Str::slug('POWER SUPPLY PSU INNOVATION LEGACY SERIES 500W MEET UP 80 GOLD'),
                'description' => 'Labore Lorem exercitation et amet eiusmod officia incididunt sunt exercitation dolore incididunt laboris officia. Est ex eu in dolore exercitation culpa in ipsum sint ut qui labore quis proident. Duis magna irure ea labore non ullamco nostrud sit dolor incididunt minim qui pariatur.
                                Consectetur sunt in adipisicing exercitation non et cupidatat ipsum et proident incididunt aliqua velit. Commodo cillum laborum eiusmod aliqua dolor dolore deserunt. Pariatur occaecat minim nostrud amet anim excepteur quis nostrud labore id officia. Cillum incididunt laboris excepteur velit. Enim laborum voluptate reprehenderit ea anim quis. Minim enim eu nostrud tempor voluptate cillum irure deserunt in.
                                Fugiat cillum id consectetur commodo fugiat fugiat ex ipsum et veniam occaecat do laboris ipsum. Elit nostrud sit nulla nisi. Consequat ex reprehenderit aliqua cupidatat. Incididunt do adipisicing cupidatat aliqua proident ad. Lorem cillum consectetur irure proident nostrud sunt amet aliqua ipsum. Adipisicing minim laboris exercitation do non.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/power-supply-psu-innovation-legacy-series-500w-meet-up-80-gold.jpg'
            ],
            [
                'name'        => 'PSU POWER SUPLLY EVGA 400W 400WATT',
                'slug'        => time() . '-' . Str::slug('PSU POWER SUPLLY EVGA 400W 400WATT'),
                'description' => 'Ad quis non velit nostrud nulla. Laborum aliquip cupidatat irure elit sunt nisi magna incididunt. Velit mollit veniam irure adipisicing ipsum proident fugiat. Duis excepteur exercitation ullamco commodo enim reprehenderit non ut irure culpa nostrud consequat minim do. Magna consectetur Lorem labore ea mollit dolor.
                                Qui pariatur magna consectetur occaecat nostrud. Dolore veniam reprehenderit eu reprehenderit qui ex culpa. Est commodo duis dolor aliquip deserunt dolor minim minim ut pariatur magna veniam. Eu aute mollit officia laborum officia pariatur. Reprehenderit consequat commodo magna fugiat cupidatat do. Est amet velit voluptate deserunt officia exercitation qui dolor quis eiusmod Lorem veniam ullamco laborum.
                                Culpa laboris reprehenderit minim fugiat pariatur exercitation et ut minim est consectetur qui. Veniam excepteur do ad nostrud fugiat enim eu mollit dolore sit fugiat. Lorem consectetur nostrud consequat proident excepteur. Ullamco non tempor labore irure consequat in magna nulla do adipisicing est nulla aute. Occaecat nostrud anim sint irure id mollit culpa.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/psu-power-suplly-evga-400w-400watt.jpg'
            ],
            [
                'name'        => 'RAM DDR4 V GEN TSUNAMI 16GB 3333MHZ CL16 2X8GB GAMING OC VGEN',
                'slug'        => time() . '-' . Str::slug('RAM DDR4 V GEN TSUNAMI 16GB 3333MHZ CL16 2X8GB GAMING OC VGEN'),
                'description' => 'Exercitation proident exercitation minim tempor est quis sit labore. Enim fugiat sit excepteur dolor aliquip anim cillum nisi anim sint ad minim in eu. Eiusmod sit in sunt eu. Reprehenderit nisi deserunt nisi amet duis laborum labore fugiat reprehenderit exercitation.
                                Tempor nostrud consectetur et aliquip nostrud aliquip. Aute magna aliqua sunt non exercitation sunt ipsum. Veniam pariatur laborum excepteur culpa magna non adipisicing. Ex proident tempor dolor deserunt mollit aliquip cupidatat magna irure enim aliquip mollit exercitation. Aute qui elit incididunt aute mollit ea tempor ad. Mollit labore consectetur aute tempor nisi aliquip ut non exercitation laboris magna consequat.
                                Ipsum consequat culpa nisi pariatur consequat aliqua sint eu labore fugiat. Exercitation aute mollit sit mollit sint dolor. Irure tempor laborum ad id fugiat reprehenderit excepteur ad in velit in eiusmod et mollit. Eiusmod aliquip esse voluptate occaecat qui enim quis minim labore deserunt. Ex Lorem duis mollit qui. Consectetur enim exercitation velit adipisicing sunt occaecat qui proident fugiat enim. Tempor fugiat ex exercitation cupidatat qui incididunt officia deserunt.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/ram-ddr4-v-gen-tsunami-16gb-3333mhz-cl16-2x8gb-gaming-oc-vgen.png'
            ],
            [
                'name'        => 'RAM PC GSKILL TRIDENT Z 8GB DDR4 3000 MHZ RGB DIMM MEMORY PC',
                'slug'        => time() . '-' . Str::slug('RAM PC GSKILL TRIDENT Z 8GB DDR4 3000 MHZ RGB DIMM MEMORY PC'),
                'description' => 'Sint velit laboris deserunt ea adipisicing in consectetur ullamco dolore veniam mollit. Dolore commodo sint fugiat eu deserunt nulla officia id. Elit ut dolore nostrud duis proident esse aute occaecat non fugiat. Adipisicing voluptate aliqua nulla officia officia consectetur sint elit aliquip ad commodo ex. Consequat sunt Lorem proident fugiat non ad do. Eiusmod adipisicing consectetur laboris pariatur.
                                Anim adipisicing nisi laboris veniam nulla labore in. Fugiat deserunt duis sunt sunt. Duis ipsum anim exercitation adipisicing voluptate exercitation occaecat in amet dolore duis id. Proident anim aliquip dolore dolor reprehenderit aliqua. Irure officia elit velit occaecat culpa nisi eiusmod voluptate exercitation exercitation ea.
                                Voluptate ut enim proident voluptate quis commodo. Elit nisi irure tempor proident quis id irure do commodo aliquip officia. Fugiat ex eu laborum amet et ea magna officia nostrud laborum ullamco eiusmod mollit qui. Excepteur fugiat et veniam anim commodo. Fugiat nostrud duis nostrud aliquip adipisicing dolor.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/ram-pc-gskill-trident-z-8gb-ddr4-3000-mhz-rgb-dimm-memory-pc.jpg'
            ],
            [
                'name'        => 'RAM PC GSKILL TRIDENT Z 16GB DDR4 3600 MHZ 2X8GB RGB DUAL CHANNEL',
                'slug'        => time() . '-' . Str::slug('RAM PC GSKILL TRIDENT Z 16GB DDR4 3600 MHZ 2X8GB RGB DUAL CHANNEL'),
                'description' => 'Elit nisi ex proident nulla. Et ex ipsum aute fugiat tempor dolore nisi consequat aliqua. Occaecat voluptate reprehenderit duis adipisicing cillum labore anim anim nulla aute ullamco quis Lorem. Tempor velit id eiusmod veniam veniam ad aliqua proident commodo aliquip ad.
                                Voluptate voluptate eiusmod sit incididunt Lorem duis aute quis nulla excepteur aute. Laboris do sit deserunt enim do tempor veniam laborum sunt et. Nulla ex laboris mollit non nulla ullamco enim sunt laboris. Voluptate excepteur veniam Lorem eu exercitation non consequat commodo reprehenderit officia quis Lorem aliqua. Et irure sit ut ea fugiat culpa in aliquip fugiat. Mollit cillum commodo proident qui cillum ex ipsum elit mollit do. Culpa fugiat id dolore laborum enim fugiat laboris magna velit.
                                Eu cupidatat veniam mollit do sit pariatur culpa laborum esse culpa labore fugiat do commodo. In commodo occaecat Lorem do mollit in nulla aliquip. Ullamco cillum tempor enim eu id quis non ex ullamco ex mollit amet et dolore. Ad ea proident tempor ad culpa quis nisi sunt velit. Deserunt deserunt voluptate ullamco laboris pariatur ea.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/ram-pc-gskill-trident-z-16gb-ddr4-3600-mhz-2x8gb-rgb-dual-channel.jpg'
            ],
            [
                'name'        => 'RAM PC GSKILL TRIDENT Z NEO 32GB 2X16GB DDR4 3600 MHZ DUAL CHANNEL',
                'slug'        => time() . '-' . Str::slug('RAM PC GSKILL TRIDENT Z NEO 32GB 2X16GB DDR4 3600 MHZ DUAL CHANNEL'),
                'description' => 'Est laborum nostrud dolor id laborum labore in. Laboris anim ad proident ut consectetur irure. Cupidatat excepteur ad laborum consectetur do elit culpa.
                                Do aliqua minim labore magna ut. Duis labore officia qui culpa id minim sint quis veniam sit non ut aliqua incididunt. Aliqua labore irure ea laboris aliquip deserunt excepteur aute voluptate ut. Incididunt nisi sint adipisicing irure ullamco velit labore cillum cillum in nisi fugiat aute. Aute ut aliqua ut aute elit aute ut aliqua ut nostrud in. Occaecat do aliquip duis elit velit. Officia aliquip ipsum cupidatat velit occaecat voluptate officia excepteur.
                                Deserunt dolor magna eiusmod in laboris amet deserunt adipisicing irure anim occaecat consectetur ex. Consequat aliqua cupidatat proident esse irure eiusmod in reprehenderit eu exercitation commodo Lorem non excepteur. Enim voluptate pariatur eu minim fugiat ad officia officia adipisicing ea. Aliquip consequat aliqua mollit laborum amet anim ut amet fugiat deserunt ipsum nostrud. Nostrud adipisicing reprehenderit quis enim fugiat do reprehenderit dolore nostrud ad adipisicing. Nostrud velit voluptate duis veniam magna ipsum culpa reprehenderit.',
                'stock'       => rand(20, 50),
                'price'       => rand(200000, 5000000),
                'photo'       => '/images/product/ram-pc-gskill-trident-z-neo-32gb-2x16gb-ddr4-3600-mhz-dual-channel.jpg'
            ],
        ]);
    }
}
