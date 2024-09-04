# Commit Rule

## Contents
1つのコミットの1つの機能を実装する（複数の機能を実装しない）

## Message
以下のものから適しているものを選択し、`value`を先頭に起き、その後詳細を記述する
[value]: [detail]
ex. feat: ユーザー作成機能

{
    value: "🌟 feat",
    name: "feat: 機能追加",
    title: "Features",
},
{
    value: "🔧 fix",
    name: "fix: 実装済み機能の修正",
    title: "Bug Fixes",
},
{
    value: "🚑 hotfix",
    name: "hotfix: 致命的で緊急なバグ修正",
    title: "Critical hotfix",
},
{
    value: "🗃 DB",
    name: "DB: DBのテーブル作成やスキーマ変更"
    title: "DB table creation and schema change"
},
{
    value: "🚧 wip",
    name: "wip: 作業中（一時的なコミット、基本残さない）",
    title: "Work In Progress",
},
{
    value: "💄 ui",
    name: "ui: アプリの見た目の変更",
    title: "Ui",
},
{
    value: "♻️ refactor",
    name: "refactor: バグの修正や機能の追加ではないコードの変更",
    title: "Code Refactoring",
},
{
    value: "🧩 style",
    name: "style: コードの整形やフォーマット等のコードの見た目の変更"
    title: "Style",
},
{
    value: "📦 package",
    name: "package: パッケージのインストールやアップグレードの変更",
    title: "install package or upgrade package",
},
{
    value: "🗒 docs",
    name: "docs: ドキュメントのみの変更",
    title: "Documentation",
},
{
    value: "⏫ perf",
    name: "perf: パフォーマンスを向上させるコードの変更",
    title: "Performance",
},
{
    value: "🧪 test",
    name: "test: 不足しているテストの追加や既存のテストの修正",
    title: "Tests",
}