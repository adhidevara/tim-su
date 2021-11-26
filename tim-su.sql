-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2021 pada 12.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tim-su`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `notelp` text NOT NULL,
  `foto` text NOT NULL DEFAULT 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg',
  `is_verified` text NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id_admin`, `id_user`, `nama`, `email`, `password`, `notelp`, `foto`, `is_verified`, `created_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', '2a16a38e0128e84a732b9d8fea36ebb438ef91976e298f84cad8d001031c73115a83a500343ee233c6691c5d6dee62c3afac1084ed38093615f3678c6fb12ff9UwICVe85fBszIhUyp7D08CSHXz7+Zze7rJw0qS0DoAc=', '082264226680', 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg', 'verified', '2021-11-26 18:56:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_diskusi`
--

CREATE TABLE `detail_diskusi` (
  `id_detail_diskusi` int(11) NOT NULL,
  `id_diskusi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `foto` text NOT NULL,
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `judul` text NOT NULL,
  `url` text NOT NULL,
  `foto` text NOT NULL DEFAULT 'https://webneel.com/sites/default/files/images/download/thumb/old-book-with-blank-cover%201_0.jpg',
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentors`
--

CREATE TABLE `mentors` (
  `id_mentor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `no_telp` text NOT NULL,
  `foto` text NOT NULL DEFAULT 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg',
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'unverified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` text NOT NULL,
  `link` text NOT NULL,
  `foto` text NOT NULL DEFAULT 'https://previews.123rf.com/images/nattyblissful/nattyblissful2001/nattyblissful200100056/136850199-news-update-online-news-news-website-newspaper-flat-style-vector-illustration-people-characters-with.jpg',
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `progresses`
--

CREATE TABLE `progresses` (
  `id_progresses` int(11) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `judul` text NOT NULL,
  `presentase_target` text NOT NULL,
  `presentase_progress` text NOT NULL DEFAULT '0',
  `bulan` datetime NOT NULL,
  `minggu_ke` text NOT NULL,
  `deskripsi` text NOT NULL,
  `note_tim` text NOT NULL,
  `note_mentor` text NOT NULL,
  `status` enum('sudah dicek','belum dicek','sedang dicek') DEFAULT NULL,
  `is_verified` text NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(11) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `jawaban` text DEFAULT NULL,
  `attachment` text DEFAULT '#',
  `review` enum('Belum Direview','Sudah Direview','Belum Dijawab','Revisi') DEFAULT 'Belum Dijawab',
  `is_verified` text NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tims`
--

CREATE TABLE `tims` (
  `id_tim` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mentor` int(11) DEFAULT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `notelp` text NOT NULL,
  `intro` text NOT NULL,
  `nama_ketua` text NOT NULL,
  `email_ketua` text NOT NULL,
  `notelp_ketua` text NOT NULL,
  `foto` text NOT NULL DEFAULT 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg',
  `is_verified` enum('verified','unverified') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `foto` text DEFAULT 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg',
  `is_verified` enum('verified','unverified') NOT NULL DEFAULT 'verified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `password`, `role`, `foto`, `is_verified`, `created_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2a16a38e0128e84a732b9d8fea36ebb438ef91976e298f84cad8d001031c73115a83a500343ee233c6691c5d6dee62c3afac1084ed38093615f3678c6fb12ff9UwICVe85fBszIhUyp7D08CSHXz7+Zze7rJw0qS0DoAc=', 'Admin', 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg', 'verified', '2021-11-26 18:55:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `detail_diskusi`
--
ALTER TABLE `detail_diskusi`
  ADD PRIMARY KEY (`id_detail_diskusi`);

--
-- Indeks untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `progresses`
--
ALTER TABLE `progresses`
  ADD PRIMARY KEY (`id_progresses`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`);

--
-- Indeks untuk tabel `tims`
--
ALTER TABLE `tims`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_diskusi`
--
ALTER TABLE `detail_diskusi`
  MODIFY `id_detail_diskusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `progresses`
--
ALTER TABLE `progresses`
  MODIFY `id_progresses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tims`
--
ALTER TABLE `tims`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
