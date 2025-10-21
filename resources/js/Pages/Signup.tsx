import React from 'react';
import { ReactNode } from 'react';
import { Head, Link, useForm } from '@inertiajs/react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/components/ui/card';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { ProgramStudi, Dosen } from '@/types'
import { GraduationCap } from 'lucide-react';

interface SignupProps {
  programStudis: ProgramStudi[];
  listDosen: Dosen[];
}

export default function Signup({ programStudis, listDosen }: SignupProps) {
  const { data, setData, post, processing, errors } = useForm({
    role: 'mahasiswa',
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    nrp: '',
    nidn: '',
    telp: '',
    prodi: '',
    dosen_nidn: '',
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    post('/signup', {
      onFinish: () => {
        setData('password', '');
        setData('password_confirmation', '');
      },
    });
  };

  return (
    <div className="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 p-4">
      <Head title="Sign Up" />
      <Card className="w-full max-w-2xl">
        <CardHeader className="">
          <div className="flex items-center justify-center mb-4">
            <div className="p-3 bg-primary rounded-full">
              <GraduationCap className="h-8 w-8 text-primary-foreground" />
            </div>
          </div>
          <CardTitle className="text-center">Register New Account</CardTitle>
          <CardDescription className="text-center">
            Complete the data below to create an account
          </CardDescription>
        </CardHeader>
        <form onSubmit={handleSubmit} className="space-y-6">
          <CardContent className="space-y-4">
            <div className="space-y-2">
              <Label htmlFor="role">Register As</Label>
              <Select value={data.role} onValueChange={(value) => setData('role', value)}>
                <SelectTrigger id="role" className={(errors.role ? 'border-red-500' : '') + "bg-input-background w-full"}>
                  <SelectValue />
                </SelectTrigger>
                <SelectContent>
                  <SelectItem value="mahasiswa">Students</SelectItem>
                  <SelectItem value="dosen">Lecturers</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div className="space-y-2">
                <Label htmlFor="name">Full Name</Label>
                <Input
                  id="name"
                  placeholder="Masukkan nama lengkap"
                  value={data.name}
                  onChange={(e) => setData('name', e.target.value)}
                  required
                  className="bg-input-background"
                />
                {errors.name && <p className="text-sm text-red-500 mt-1">{errors.name}</p>}
              </div>

              <div className="space-y-2">
                <Label htmlFor="email">Email</Label>
                <Input
                  id="email"
                  type="email"
                  placeholder="0123456789@its.ac.id"
                  value={data.email}
                  onChange={(e) => setData('email', e.target.value)}
                  required
                  className="bg-input-background"
                />
                {errors.email && <p className="text-sm text-red-500 mt-1">{errors.email}</p>}
              </div>
            </div>
            
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              {data.role === 'mahasiswa' ? (
                  <div className="space-y-2">
                    <Label htmlFor="nrp">Student ID</Label>
                    <Input
                      id="nrp"
                      placeholder="5025251000"
                      value={data.nrp}
                      onChange={(e) => setData('nrp', e.target.value)}
                      required
                      className="bg-input-background"
                    />
                    {errors.nrp && <p className="text-sm text-red-500 mt-1">{errors.nrp}</p>}
                  </div>
                ) : (
                  <div className="space-y-2">
                    <Label htmlFor="nidn">Lecturer ID</Label>
                    <Input
                      id="nidn"
                      placeholder="0101018801"
                      value={data.nidn}
                      onChange={(e) => setData('nidn', e.target.value)}
                      required
                      className="bg-input-background"
                    />
                    {errors.nidn && <p className="text-sm text-red-500 mt-1">{errors.nidn}</p>}
                  </div>
                )}
                <div className="space-y-2">
                  <Label htmlFor="telp">Phone Number</Label>
                  <Input
                    id="telp"
                    placeholder="081123456789"
                    value={data.telp}
                    onChange={(e) => setData('telp', e.target.value)}
                    required
                    className="bg-input-background"
                  />
                  {errors.email && <p className="text-sm text-red-500 mt-1">{errors.email}</p>}
                </div>
              </div>
            
            <div className="space-y-2">
              <Label htmlFor="prodi">Major</Label>
              <Select value={data.prodi} onValueChange={(value) => setData('prodi', value)}>
                <SelectTrigger id="prodi" className={(errors.role ? 'border-red-500' : '') + "bg-input-background w-full"}>
                  <SelectValue placeholder="Pilih program studi" />
                </SelectTrigger>
                <SelectContent>
                  {programStudis.map((prodi) => (
                    <SelectItem key={prodi.id_prodi} value={prodi.id_prodi}>
                      {prodi.nama_prodi}
                    </SelectItem>
                  ))}
                </SelectContent>
              </Select>
              {errors.prodi && <p className="text-sm text-red-500 mt-1">{errors.prodi}</p>}
            </div>

            {data.role === 'mahasiswa' && (
            <div className="space-y-2">
              <Label htmlFor="dosen_nidn">Personal Lecturer</Label>
              <Select value={data.dosen_nidn} onValueChange={(value) => setData('dosen_nidn', value)}>
                <SelectTrigger id="dosen_nidn" className={(errors.role ? 'border-red-500' : '') + "bg-input-background w-full"}>
                  <SelectValue placeholder="Pilih Dosen Pembimbing" />
                </SelectTrigger>
                <SelectContent>
                  { data.prodi === '' ? ( 
                    <SelectItem value='none'>
                      SELECT A STUDY PROGRAM FIRST
                    </SelectItem>
                  ) : (
                    listDosen.filter(d => d.program_studi_id_prodi === data.prodi).map((dosen) => (
                      <SelectItem key={dosen.nidn} value={dosen.nidn}>
                        {dosen.nama_dosen}
                      </SelectItem>
                    ))
                  )}
                </SelectContent>
              </Select>
              {errors.dosen_nidn && <p className="text-sm text-red-500 mt-1">{errors.prodi}</p>}
            </div>
            )}

            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div className="space-y-2">
                <Label htmlFor="password">Password</Label>
                <Input
                  id="password"
                  type="password"
                  placeholder="••••••••"
                  value={data.password}
                  onChange={(e) => setData('password', e.target.value)}
                  required
                  className="bg-input-background"
                />
                {errors.password && <p className="text-sm text-red-500 mt-1">{errors.password}</p>}
              </div>

              <div className="space-y-2">
                <Label htmlFor="password_confirmation">Confirm Password</Label>
                <Input
                  id="password_confirmation"
                  type="password"
                  placeholder="••••••••"
                  value={data.password_confirmation}
                  onChange={(e) => setData('password_confirmation', e.target.value)}
                  required
                  className="bg-input-background"
                />
              </div>
            </div>
          </CardContent>
          <CardFooter className="flex flex-col space-y-4">
            <Button type="submit" className="w-full" disabled={processing}>
              Register
            </Button>
            <p className="text-sm text-center text-muted-foreground">
              Have account already?{' '}
              <Link href="/login" className="text-primary hover:underline">
                Log In here
              </Link>
            </p>
          </CardFooter>
        </form>
      </Card>
    </div>
  );
}

Signup.layout = (page: ReactNode) => page;