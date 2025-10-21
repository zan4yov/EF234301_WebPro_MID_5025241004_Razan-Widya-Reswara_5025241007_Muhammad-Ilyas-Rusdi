import { ReactNode } from 'react';
import { Link, usePage } from '@inertiajs/react';
import { PageProps } from '@/types';
import { Button } from '@/components/ui/button';
import { Avatar, AvatarFallback } from '@/components/ui/avatar';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import { 
  GraduationCap, 
  LayoutDashboard, 
  FileText, 
  BookOpen, 
  User, 
  LogOut,
  Users,
  CheckSquare,
  Calendar
} from 'lucide-react';

interface LayoutProps {
  children: ReactNode;
}

export function Layout({ children }: LayoutProps) {
  const { props, url } = usePage<PageProps>();
  const { auth } = props;
  const user = auth.user;

  const getInitials = (name: string | undefined) => {
    if (!name) return '??';
    return name
      .split(' ')
      .map((n) => n[0])
      .join('')
      .toUpperCase()
      .slice(0, 2);
  };

  const getNavItems = () => {
    if (user?.role === 'mahasiswa') {
      return [
        { href: '/mahasiswa/dashboard', label: 'Dashboard', icon: LayoutDashboard },
        { href: '/mahasiswa/krs', label: 'Study Plan Card', icon: FileText },
        { href: '/mahasiswa/jadwal', label: 'Course Schedule', icon: Calendar },
        { href: '/mahasiswa/nilai', label: 'Grade', icon: BookOpen },
      ];
    } else if (user?.role === 'dosen') {
      return [
        { href: '/dosen/dashboard', label: 'Dashboard', icon: LayoutDashboard },
        { href: '/dosen/persetujuan', label: 'KRS Approval', icon: CheckSquare },
        { href: '/dosen/kelas', label: 'My Course', icon: Users },
        { href: '/dosen/jadwal', label: 'Lecture Schedule', icon: Calendar },
      ];
    }
    return [];
  };

  const isActive = (path: string) => {
    return url.startsWith(path);
  };

  return (
    <div className="min-h-screen bg-background flex flex-col">
      <header className="border-b bg-card sticky top-0 z-50">
        <div className="container mx-auto px-4 py-4 flex items-center justify-between">
          <div className="flex items-center gap-3">
            <div className="p-2 bg-primary rounded-lg">
              <GraduationCap className="h-6 w-6 text-primary-foreground" />
            </div>
            <div>
              <h1 className="text-xl">Online KRS System</h1>
              <p className="text-xs text-muted-foreground">Institut Teknologi Sepuluh Nopember</p>
            </div>
          </div>
          
          {user && (
            <DropdownMenu>
              <DropdownMenuTrigger asChild>
                <Button variant="ghost" className="relative h-10 w-10 rounded-full">
                  <Avatar>
                    <AvatarFallback>{getInitials(user.name)}</AvatarFallback>
                  </Avatar>
                </Button>
              </DropdownMenuTrigger>
              <DropdownMenuContent align="end" className="w-56">
                <DropdownMenuLabel>
                  <div className="flex flex-col space-y-1">
                    <p>{user.name}</p>
                    <p className="text-xs text-muted-foreground capitalize">{user.role}</p>
                  </div>
                </DropdownMenuLabel>
                <DropdownMenuSeparator />
                <DropdownMenuItem asChild>
                  <Link href={user.role === 'mahasiswa' ? '/mahasiswa/profil' : '/dosen/profil'}>
                    <User className="mr-2 h-4 w-4" />
                    Profil
                  </Link>
                </DropdownMenuItem>
                <DropdownMenuItem asChild>
                  <Link href="/logout" method="post" as="button" className="w-full">
                    <LogOut className="mr-2 h-4 w-4" />
                    Keluar
                  </Link>
                </DropdownMenuItem>
              </DropdownMenuContent>
            </DropdownMenu>
          )}
        </div>
      </header>

      {user && (
        <nav className="border-b bg-card">
          <div className="container mx-auto px-4">
            <div className="flex gap-1 overflow-x-auto">
              {getNavItems().map((item) => {
                const Icon = item.icon;
                return (
                  <Link
                    key={item.href}
                    href={item.href}
                    className={`flex items-center gap-2 px-4 py-3 text-sm whitespace-nowrap border-b-2 transition-colors ${
                      isActive(item.href)
                        ? 'border-primary text-primary'
                        : 'border-transparent text-muted-foreground hover:text-foreground'
                    }`}
                  >
                    <Icon className="h-4 w-4" />
                    {item.label}
                  </Link>
                );
              })}
            </div>
          </div>
        </nav>
      )}

      <main className="container mx-auto px-4 py-6 flex-grow">
        {children}
      </main>

      <footer className="border-t bg-card mt-12">
        <div className="container mx-auto px-4 py-6 text-center text-sm text-muted-foreground">
          <p>© 2025 Institut Teknologi Sepuluh Nopember - Online KRS System</p>
        </div>
      </footer>
    </div>
  );
}