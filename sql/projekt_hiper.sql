-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Gru 2022, 14:03
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `php`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rasy`
--

CREATE TABLE `rasy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(40) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `charakter` text DEFAULT NULL,
  `pielegnacja` text DEFAULT NULL,
  `dlaKogo` text DEFAULT NULL,
  `zdjecie` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `rasy`
--

INSERT INTO `rasy` (`id`, `nazwa`, `opis`, `charakter`, `pielegnacja`, `dlaKogo`, `zdjecie`) VALUES
(1, 'Shiba Inu', 'Shiba inu to kombinacja niezależności, pewności siebie i niezwykłej inteligencji. Właściciele psów tej rasy zgodnie przyznają, że wychowanie shiby jest nie lada wyzwaniem. Jednak po wypracowaniu porozumienia można zyskać wiernego przyjaciela, doskonałego stróża i wesołego towarzysza zabaw.', 'Shiba inu to niezależny, pewny siebie pies, który zazwyczaj ma własne zdanie i lubi postawić na swoim. Odpowiednio wychowywany staje się wiernym towarzyszem, oddanym i lojalnym wobec domowników. Mocno przywiązuje się do opiekuna, choć niechętnie okazuje uczucia i poddaje się pieszczotom. Wobec obcych wykazuje zdystansowanie i jest zazwyczaj podejrzliwy i nieufny. \r\n\r\nCechą charakterystyczną shiba inu jest wewnętrzny spokój i umiejętność dostosowywania się do stylu życia domowników. To cichy, spokojny pies, który posiada niezwykle wyostrzone zmysły. Jest inteligentny, szybko się uczy, a odpowiednio zmotywowany potrafi przezwyciężyć swój upór i po pewnym czasie podejmuje współpracę. Jest świetnym stróżem, doskonale wyczuwa zagrożenie. Lubi  aktywność fizyczną, wyzwania, zabawy. Ruch pozwala mu rozładować energię i zaspokaja naturalne instynkty. Jeśli opiekun zapewni mu odpowiednią dawkę aktywności, odnajdzie się nie tylko w domu z ogrodem, lecz także w małym mieszkaniu w bloku.\r\n\r\nShiba jest szybki zwinny, energiczny i sprytny, co w połączeniu z silnym instynktem łowieckim przekłada się na dużą skłonność do ucieczek. Może nagle podążyć za tropem, nie zwracając uwagi na przywoływania opiekuna. W kontaktach z innymi zwierzętami jego zachowanie może okazać się mocno problematyczne. Potrafi biegać za małymi czworonogami traktując je jak zdobycz. Może też  wobec niektórych ras dużych psów wykazywać agresję.\r\n\r\nPonieważ wraz z wiekiem rośnie upór i poczucie niezależności, Shiba wymaga jak najwcześniejszej socjalizacji, konsekwentnego wpajania i egzekwowania zasad. Jego szkolenie powinno opierać się na poszanowaniu wyjątkowej natury tego czworonoga.', 'Z powodu gęstego i obficie wypadającego delikatnego podszerstka, pielęgnacja shiby koncentruje się na regularnym( dwa razy w tygodniu) szczotkowaniu sierści. W okresie wzmożonego linienia, czyli wiosną i jesienią, należy pupila wyczesywać znacznie częściej i dokładniej. Do szczotkowania warto użyć grzebienia, furminatora oraz odżywki antystatycznej. Shiba należy do bardzo czystych psów, potrafi godzinami wylizywać futro. Dlatego kąpiele stosujemy w razie potrzeby, na ogół 3 razy w roku. Dbamy także o czystość uszu, odpowiednią długość pazurów i stan zębów.', 'Decyzja o nabyciu psa tej rasy powinna być poprzedzona dokładnym rozpoznaniem argumentów za i przeciw. Do niewątpliwych zalet shiby należy przyjacielskie usposobienie wobec dzieci, ogromne przywiązanie do opiekuna, rodzinny charakter, zdolności adaptacyjne do każdych warunków, pomysłowość i inteligencja. Z drugiej strony trzeba wziąć pod uwagę, że to wielki indywidualista, który nie zawsze bywa posłuszny, ma tendencję do dominacji i wykazuje silny instynkt łowiecki.', 'shiba.jpg'),
(2, 'Owczarek niemiecki', 'Owczarek niemiecki to pies niezwykle inteligentny, energiczny, posłuszny, bardzo odważny, mocno przywiązany do opiekuna. Bardzo lubi bawić się i aktywnie spędzać czas na dworze. Średnia długość życia owczarków niemieckich wynosi 10–13 lat. Występuje w odmianie długo- i krótkowłosej.', 'Cechą typową owczarka niemieckiego jest czułość i przywiązanie do członków ludzkiej rodziny. Psy te są bardzo towarzyskie, lojalne i ufne. Lubią zabawę, szczególnie taką, która zapewni im dużo ruchu. Dlatego warto angażować owczarki niemieckie we wspólne aktywności ruchowe typu jazda rowerem czy biegi. W związku z tym konieczne jest wyposażenie psa w niezbędne akcesoria – szelki i smycz. Ten zestaw w najmniejszym stopniu będzie krępował jego ruchy i jednocześnie zapewni bezpieczeństwo oraz kontrolę nad psem. Zobacz, jakie smycze i szelki można wybrać dla psów wielkości owczarka niemieckiego. Przebywając na dworze, nie wolno też zapomnieć o ochronie przed pasożytami. Sprawdź, jakie preparaty na pchły i kleszcze pomogą zabezpieczyć pupila. Wybór jest bardzo duży. Najbardziej popularne są obroże. Oto przykładowe modele: BAYER KILTIX Obroża przeciw pchłom i kleszczom dla dużych psów 70 cm czy FRANCODEX Obroża dla dużych psów powyżej 20 kg odstraszająca insekty. Wybierając zabawy, trzeba pamiętać o tych rozwijających umysł. Wykorzystać można do nich piłki, bawełniane sznury, gryzaki. W naszym sklepie znajdziesz niezwykle bogatą ofertę psich zabawek.', 'Owczarek niemiecki nie potrzebuje wymagających zabiegów pielęgnacyjnych. Ograniczają się one głównie do okresowych kąpieli, kontrolowania czystość uszu oraz ewentualnego usuwania kamienia nazębnego i skracania pazurów. Dodatkowo wskazane jest czesanie, szczególnie u odmiany długowłosej – dwa, trzy razy na tydzień, a u krótkowłosych głównie podczas linienia. Wszelkie potrzebne do pielęgnacji akcesoria można znaleźć w naszym sklepie zoologicznym. Najczęstsze choroby to dysplazja stawów biodrowych lub łokciowych oraz zapalenie uszu, spojówek i skręt żołądka.', 'Owczarek niemiecki ze względu na spore wymagania szkoleniowe i dużą aktywność fizyczną nie nadaje się dla każdego. Jego właściciel musi być konsekwentny, zrównoważony, mieć podstawową wiedzę o psach i żyłkę sportowca. Owczarek niemiecki może zamieszkać zarówno w domu z ogrodem, jak i w mieszkaniu, pod warunkiem zapewnienia mu odpowiedniej dawki aktywności fizycznej.\r\n\r\n', 'owczarek.jpg'),
(3, 'Husky syberyjski', 'Miłośnicy siberian husky twierdzą, że kto raz go wybrał, już zawsze będzie miał psa tej rasy lub... nigdy więcej się na niego nie zdecyduje. Husky nie lubią samotności, dlatego najlepiej się czują, stale towarzysząc człowiekowi lub przebywając wśród innych psów.', 'Siberian husky to pies o dużym temperamencie, żywiołowy, radosny i przyjacielski. Jest bardzo czujny, ale łagodne usposobienie sprawia, że nie nadaje się na stróża. Potrafi się szybko przystosować do nowych warunków. Świetnie dogaduje się z dziećmi, jednak z uwagi na jego ruchliwość i spontaniczność nie należy zostawiać go z maluchami bez nadzoru.\r\n\r\nSiberian husky nie lubią samotności, dlatego najlepiej się czują, stale towarzysząc człowiekowi lub przebywając wśród innych psów (zwłaszcza własnej rasy). Zachowały wiele cech typowych dla wilczych przodków. Częściej wyją, niż szczekają, a grupa przejawia silne zachowania terytorialne i może być groźna dla intruzów.\r\n\r\nCiekawość, spryt i duża sprawność fizyczna sprawiają, że siberian husky jest mistrzem ucieczek. Jeśli trzymamy go na zewnątrz, ogród musi otaczać wysokie ogrodzenie (dwumetrowy płot może nie być wystarczającą przeszkodą dla przedstawiciela tej rasy) na solidnej podmurówce. Nawet największy ogród nie zastąpi jednak regularnych spacerów i treningów.\r\n\r\nSiberian husky potrzebuje konkretnego zadania i solidnej porcji ruchu – zwykła przechadzka na smyczy mu nie wystarczy (znudzony będzie niszczył przedmioty w otoczeniu). Lepszym rozwiązaniem jest wspólne bieganie. Nie trzeba od razu startować w wyścigach zaprzęgów – jego potrzeby zaspokoją też jogging, kłus przy rowerze czy piesza wędrówka.', 'Intensywność i częstotliwość linienia siberian husky zależy od warunków, w jakich psy przebywają. W wypadku tych spędzających większość czasu na zewnątrz zwykle dzieje się to dwa razy do roku. Wiosenna wymiana szaty jest bardzo intensywna, wypada prawie cały podszerstek i częściowo włos okrywowy. Jesienią husky gubi umiarkowane ilości włosa okrywowego. Psy żyjące w mieszkaniu linieją dodatkowo w czasie, gdy działa centralne ogrzewanie. Niewielkie ilości sierści wypadają mu praktycznie przez cały czas.\r\n\r\nPsa kąpiemy w miarę potrzeby lub przed wystawą – zbyt częste kąpiele niszczą naturalną warstwę ochronną włosa, przez co szata staje się mniej odporna na warunki atmosferyczne. Najlepsze są szampony z naturalnymi olejkami, które zapobiegają nadmiernemu przesuszeniu sierści. Następnie suszymy pupila letnim strumieniem powietrza z suszarki, jednocześnie dokładnie go wyczesując (jeśli jest ciepło i nie wybieramy się na wystawę, sierść może wyschnąć sama). Przygotowując siberian husky do pokazu, można się posłużyć blasterem – suszarką o bardzo dużej mocy, która sprawia, że włosy są dokładnie rozdzielone (podnosi to znacznie atrakcyjność wyglądu). Dozwolona jest lekka korekta sierści na łapach w celu uwypuklenia ich kształtu i nadania schludnego wyglądu.', 'Siberian husky nie nadaje się dla domatora ani osoby oczekującej od psa bezwzględnego posłuszeństwa. Wymaga cierpliwego i wyrozumiałego właściciela, który poświęci mu sporo czasu i zapewni zajęcie. Miłośnicy rasy uważają się, że kto raz zdecyduje się na husky’ego szybko będzie miał ich całe stado albo… już nigdy więcej nie weźmie takiego psa.', 'husky.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `haslo` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `imie` varchar(30) DEFAULT NULL,
  `nazwisko` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rasy`
--
ALTER TABLE `rasy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `rasy`
--
ALTER TABLE `rasy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
