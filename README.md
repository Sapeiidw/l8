# Tugas PABW OOP | Kelompok 5.
## Anggota
	1. Abi Ichsan Ramadhan 	- 11181002
	2. Andhika Setiawan 	- 11181009
	3. Mulyanur Hanafi 	- 11181067
	4. Sakti Pujo Edi 	- 11181077


## All Feature ( working )
### 1. User ( Has Many Course )
	- login
	- register
	- read
	- update
	- delete
### 2. Departement ( Has Many Prodi )
	- CRUD
	- when deleted Prodi also deleted
### 3. Prodi ( Belongs To Departement )
	- CRUD
	- when deleted, relation to Departement also deleted
### 4. Matkul ( Has Many Course )
	- CRUD
	- when deleted Course also deleted
### 5. Course ( Belongs To Matkul, Has Many User, Has Many Assignment)
	- CRUD
	- when deleted Assignment also deleted and Submission also deleted
### 6. Assignment ( Belongs To Course, Has Many Submission )
	- CRUD
	- when deleted Submission also deleted
### 7. submission ( Belongs To Assignment, Has User )
	- CRUD
	- when deleted Submission also deleted

## Cons
	1. UI/UX still bad
	2. url doesnt pretty
	3. Security kurang
