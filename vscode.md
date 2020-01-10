# Visual Studio Code

## 配值文件
一次设置后，可以把配值文件保存下来，下次再用。

Depending on your platform, the user settings file is located here:

>**Windows** `%APPDATA%\Code\User\settings.json`
>
>**macOS** `$HOME/Library/Application Support/Code/User/settings.json`
>
>**Linux** `$HOME/.config/Code/User/settings.json`

## Duplicate Symbols
安装扩展PHP Intelephense后，把PHP IntelliSense禁用

## 标题栏显示完整路径
在settings里面，搜title，找到`Window: Title`,

`${dirty}${activeEditorShot}${separator}${rootName}${separator}${appName}`

把`${activeEditorShot}`换为`${activeEditorLong}`

## 使用git-bash
Windows PowerShell或CMD无法运行wax，可以用git-bash。

`"terminal.integrated.shell.windows": "D:\\Program Files (x86)\\PortableGit\\bin\\bash.exe",`